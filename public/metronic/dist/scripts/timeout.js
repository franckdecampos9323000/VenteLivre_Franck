
window.onload = function() {
    // Sélectionner tous les éléments avec l'id
    const successmessages = document.querySelectorAll("#msgsuccess");

    // Pour chaque élément, afficher le message pendant 4 secondes
    successmessages.forEach(successmessage => {
    setTimeout(() => {
        // Supprimer la div contenant le message
        successmessage.remove();
    }, 9000);
    });
};

// Sélectionner tous les éléments avec l'id
    const dangermessages = document.querySelectorAll("#msgdanger");

    // Pour chaque élément, afficher le message pendant 4 secondes
    dangermessages.forEach(dangermessage => {
    setTimeout(() => {
        // Supprimer la div contenant le message
        dangermessage.remove();
    }, 9000);
    });
