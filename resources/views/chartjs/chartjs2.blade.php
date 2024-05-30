<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Effectuer une requête AJAX pour récupérer les données du graphique
        var xhr = new XMLHttpRequest();
        xhr.open('GET', "{{ route('chart-data2') }}");
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onload = function () {
            if (xhr.status === 200) {
                var categories = JSON.parse(xhr.responseText);

                // Préparer les données pour le graphique
                var labels = categories.map(function (category) {
                    return category.name;
                });
                var data = categories.map(function (category) {
                    return category.trainings_count;
                });

                // Créer le graphique
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Nombre de formations',
                            data: data,
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.6)',
                                // Ajoutez ici d'autres couleurs si nécessaire
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                // Ajoutez ici d'autres couleurs si nécessaire
                            ],
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Liste des Catégories',
                                    color:'#0a58ca'
                                },
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Nombre de Formations',
                                    color:'#0a58ca'
                                },
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                }
                            }
                        }
                    }
                });

            }
        };
        xhr.send();
    });
</script>
