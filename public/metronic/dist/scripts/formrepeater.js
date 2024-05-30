// Code JavaScript pour initialiser le formulaire de type form repeat
$('#chapters').repeater({
    initEmpty: false,

    show: function() {
        $(this).slideDown();

        // Re-init select2
        $(this).find('[data-repeater="select2"]').select2();

        // Recherchez le champ de description à l'intérieur de l'élément répété
        var descriptionField = $(this).find('.kt_docs_tinymce_basic');

        // Générez un ID unique pour le champ de description
        var descID = 'description_' + Date.now();

        // Attribuez l'ID généré au champ de description
        descriptionField.attr('id', descID);

        // Re-init tinymce
        var options = {
            selector: "#" + descID,
            height: "300",
            width: "600"
        };

        if (KTThemeMode.getMode() === "dark") {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    },

    hide: function(deleteElement) {
        // Use SweetAlert confirmation
        Swal.fire({
            title: 'Êtes-vous sûr(e) ?',
            text: "Voulez-vous vraiment supprimer cet élément ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).slideUp(deleteElement);
                // Show SweetAlert success message
                Swal.fire(
                    'Supprimé !',
                    'L\'élément a été supprimé avec succès.',
                    'success'
                );
            }
        });
    },
});


// Code JavaScript pour initialiser le formulaire de type form repeat
// Définir un compteur pour les ID de description

// Déclarer la variable counter en dehors de la fonction show
var counter = 0;

$('#trainings').repeater({
    initEmpty: false,

    show: function() {
        $(this).slideDown();

        // Incrémenter le compteur
        counter++;

        // Créer un ID unique pour la description
        var descID = 'description_' + counter;

        // Modifier l'ID de la description
        $(this).find('.kt_docs_tinymce_basic').attr('id', descID);

        // Re-init select2
        $(this).find('[data-repeater="select2"]').select2();

        // Re-init tinymce
        var options = {
            selector: "#" + descID,
            height: "300",
            width: "600"
        };

        if (KTThemeMode.getMode() === "dark") {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    },

    hide: function(deleteElement) {
        // Use SweetAlert confirmation
        Swal.fire({
            title: 'Êtes-vous sûr(e) ?',
            text: "Voulez-vous vraiment supprimer cet élément ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).slideUp(deleteElement);
                // Show SweetAlert success message
                Swal.fire(
                    'Supprimé !',
                    'L\'élément a été supprimé avec succès.',
                    'success'
                );
            }
        });
    }
});

// Gérer la prévisualisation de l'image lors de la sélection d'un fichier
$(document).on('change', '.image-input input[type="file"]', function() {
    var $imageInput = $(this).closest('.image-input');
    var $previewContainer = $imageInput.find('.image-input-wrapper');
    var $removeButton = $imageInput.find('[data-kt-image-input-action="remove"]');

    var file = this.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        $previewContainer.empty();
        var $previewImage = $('<img>').attr('src', e.target.result).attr('alt', 'Image prévisualisée').addClass('preview-image');
        $previewImage.on('load', function() {
            if ($previewImage.height() > $previewContainer.height()) {
                $previewImage.css('height', '100%');
                $previewImage.css('width', 'auto');
            }
        });
        $previewContainer.append($previewImage);
        $removeButton.show();
    };

    reader.readAsDataURL(file);
});

// Gérer la suppression de l'image
$(document).on('click', '[data-kt-image-input-action="remove"]', function() {
    var $imageInput = $(this).closest('.image-input');
    var $previewContainer = $imageInput.find('.image-input-wrapper');
    var $input = $imageInput.find('input[type="file"]');
    var $removeButton = $imageInput.find('[data-kt-image-input-action="remove"]');

    $previewContainer.empty();
    $input.val('');
    $removeButton.hide();
});


// Code JavaScript pour initialiser le formulaire de type form repeat
$('#categories').repeater({
    initEmpty: false,

    show: function() {
        $(this).slideDown();
    },

    hide: function(deleteElement) {
        // Use SweetAlert confirmation
        Swal.fire({
            title: 'Êtes-vous sûr(e) ?',
            text: "Voulez-vous vraiment supprimer cet élément ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).slideUp(deleteElement);
                // Show SweetAlert success message
                Swal.fire(
                    'Supprimé !',
                    'L\'élément a été supprimé avec succès.',
                    'success'
                );
            }
        });
    },
});
