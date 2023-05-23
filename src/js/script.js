alert("Salutation Humain !!!");
const usersBtn = document.getElementById('users-btn');
const booksBtn = document.getElementById('books-btn');
const getUser = document.getElementById('getUser-btn');
const getBook = document.getElementById('getBook-btn');

usersBtn.addEventListener('click', async function displayUsers(){
    
    const response = await fetch('users');
    const data = await response.json();
    const str = JSON.stringify(data);
    const contentDiv = document.getElementById('content');
    contentDiv.innerHTML = str;
    
});

booksBtn.addEventListener('click', async function displayBooks(){
    const response = await fetch('books');
    const data = await response.json();
    const str = JSON.stringify(data);
    const contentDiv = document.getElementById('content');
    contentDiv.innerHTML = str;
    
});

getUser.addEventListener('click', async function displayUserById(){
    const idUser = document.getElementById('id-user').value;
    const response = await fetch('users/' + idUser);
    const data = await response.json();
    const str = JSON.stringify(data);
    const contentDiv = document.getElementById('content');
    contentDiv.innerHTML = str;

});

getBook.addEventListener('click', async function displayBookById(){
    const idBook = document.getElementById('id-book').value;
    const response = await fetch('books/' + idBook)
    const data = await response.json();
    const str = JSON.stringify(data);
    const contentDiv = document.getElementById('content');
    contentDiv.innerHTML = str;
});
