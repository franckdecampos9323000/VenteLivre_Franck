const selectAllCheckbox = document.getElementById('kt_roles_select_all');
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name^="user_management"], input[type="checkbox"][name^="content_management"]');
    selectAllCheckbox.addEventListener('click', () => {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
