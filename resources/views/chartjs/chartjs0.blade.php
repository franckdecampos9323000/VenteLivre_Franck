<script>
    // Fonction pour formater la date au format français
    function formatDate(date) {
        return moment(date).format('DD/MM/YYYY');
    }

    document.addEventListener('DOMContentLoaded', function () {
    // Effectuer une requête AJAX pour récupérer les données du graphique
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "{{ route('chart-data0') }}");
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onload = function () {
        if (xhr.status === 200) {
            var sessions = JSON.parse(xhr.responseText);

            // Préparer les données pour le graphique
            var data = sessions.map(function (session) {
                // Vous pouvez personnaliser les informations de session ici
                var endDate = session.enddate ? formatDate(session.enddate) : 'Date inconnue';
                return {
                    label: session.session + ' - ' + session.training + ' (fin: ' + endDate + ')',
                    value: 1 // Vous devez fournir les données réelles du graphique ici
                };
            });

            // Créer le graphique
            var ctx = document.getElementById('myChart0').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: data.map(function (item) {
                        return '';
                    }),
                    datasets: [{
                        data: data.map(function (item) {
                            return item.value;
                        }),
                        backgroundColor: [
                            'rgba(212, 30, 30, 0.6)',
                            // Ajoutez ici d'autres couleurs si nécessaire
                        ],
                        borderColor: [
                            'rgba(212, 30, 30, 1)',
                            // Ajoutez ici d'autres couleurs si nécessaire
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    var sessionInfo = data[context.dataIndex].label;
                                    return sessionInfo;
                                }
                            },
                            enabled: true,
                            mode: 'index',
                            intersect: false,
                        },
                        legend: {
                            display: false, //Pour ne pas afficher de légende
                        },
                        /*title: {
                            display: true,
                            text: 'Répartition des sessions'
                        } */
                    }
                }
            });
        }
    };
    xhr.send();
});

</script>
