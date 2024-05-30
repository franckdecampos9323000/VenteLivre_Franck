// Récupérer le checkbox "Sélectionner tout"
    const selectAllCheckbox = document.getElementById('select-all');

    // Récupérer tous les checkboxes de permission
    const permissionCheckboxes = document.getElementsByClassName('permission-checkbox');

    // Ajouter un événement de clic au checkbox "Sélectionner tout"
    selectAllCheckbox.addEventListener('click', function () {
        // Récupérer l'état coché du checkbox "Sélectionner tout"
        const isChecked = selectAllCheckbox.checked;

        // Parcourir tous les checkboxes de permission et les cocher ou les décocher en fonction de l'état du checkbox "Sélectionner tout"
        for (const checkbox of permissionCheckboxes) {
            checkbox.checked = isChecked;
        }
    });
