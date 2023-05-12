alert("Salutation Humain !!!");

let usersBtn = document.getElementById('users-btn');
usersBtn.addEventListener('click', function(){
    fetch('users')
    .then(response => response.text())
    .then(data => {
        // Utiliser les données récupérées pour mettre à jour le contenu de la page index.php
        let contentDiv = document.getElementById('content');
        contentDiv.innerHTML = data;
    });
});

let booksBtn = document.getElementById('books-btn');
booksBtn.addEventListener('click', function(){
    fetch('books')
    .then(response => response.text())
    .then(data => {
        // Utiliser les données récupérées pour mettre à jour le contenu de la page index.php
        let contentDiv = document.getElementById('content');
        contentDiv.innerHTML = data;
    });
});