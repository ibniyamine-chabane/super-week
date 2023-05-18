alert("Salutation Humain !!!");

const usersBtn = document.getElementById('users-btn');
usersBtn.addEventListener('click', function(){
    fetch('users')
    .then(response => response.text())
    .then(data => {
        // Utiliser les données récupérées pour mettre à jour le contenu de la page index.php
        const contentDiv = document.getElementById('content');
        contentDiv.innerHTML = data;
    });
});

const booksBtn = document.getElementById('books-btn');
booksBtn.addEventListener('click', function(){
    fetch('books')
    .then(response => response.text())
    .then(data => {
        // Utiliser les données récupérées pour mettre à jour le contenu de la page index.php
        const contentDiv = document.getElementById('content');
        contentDiv.innerHTML = data;
    });
});

const getUser = document.getElementById('getUser-btn');
getUser.addEventListener('click', function(){
    const idUser = document.getElementById('id-user').value;
    fetch('users/' + idUser)
    .then(response => response.text())
    .then(data => {
        // Utiliser les données récupérées pour mettre à jour le contenu de la page index.php
        const contentDiv = document.getElementById('content');
        contentDiv.innerHTML = data;
    });
});

const getBook = document.getElementById('getBook-btn');
getBook.addEventListener('click', function(){
    const idBook = document.getElementById('id-book').value;
    fetch('books/' + idBook)
    .then(response => response.text())
    .then(data => {
        // Utiliser les données récupérées pour mettre à jour le contenu de la page index.php
        const contentDiv = document.getElementById('content');
        contentDiv.innerHTML = data;
    });
});
