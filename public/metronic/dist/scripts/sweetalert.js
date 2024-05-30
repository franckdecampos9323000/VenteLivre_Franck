function deleteline(event) {
    event.preventDefault();
    Swal.fire({
        html: '<strong>Êtes-vous sûr de vouloir supprimer ?</strong>',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Supprimer',
        cancelButtonText: 'Annuler',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Requête validée',
                showConfirmButton: false,
                timer: 10500
            });
            event.target.closest('form').submit();
        }
    });
}

const button2 = document.getElementById('kt_docs_sweetalert_html2');

    button2.addEventListener('click', e => {
        e.preventDefault();

        Swal.fire({
            html: `<strong>Êtes-vous sûr de vouloir réinitialiser le mot de passe ?</strong>`,
            icon: "danger",
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: "Oui!",
            cancelButtonText: 'Annuler',
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: 'btn btn-danger'
            }
        });
    });
