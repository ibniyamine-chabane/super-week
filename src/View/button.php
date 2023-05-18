<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="src/js/script.js" defer></script>
    <title>form</title>
</head>
<body>
    
        <label for="id">saisir l'id de l'utilisateur</label>
        <input type="number" name="id-user" id="id-user">
        <button id="getUser-btn">valider</button>
        <br>
        <label for="id">saisir l'id du livre</label>
        <input type="number" name="id-book" id="id-book">
        <button id="getBook-btn">valider</button>
        <br>
    <button id="users-btn">Users</button>
    <button id="books-btn">Books</button>
    <div id="content"></div>
</body>
</html>