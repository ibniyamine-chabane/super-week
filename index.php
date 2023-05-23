<?php 
use App\Controller\AuthController;
use App\Controller\UserController;
//use Faker;

require_once('vendor/autoload.php');

$router = new AltoRouter();
$router->setBasePath('/super-week');

$router->map( 'GET', '/', function () {
    session_start();

    if (isset($_SESSION['first_name'])){
        echo '<h1>Bienvenue '.$_SESSION['first_name'].'</h1>';
    }else {
    echo "<h1>Bienvenue sur l'accueil</h1>";
    }   
    require_once "src/View/button.php";


}, 'home' );

$router->map( 'GET', '/users', function () {
    // echo "<h1>Bienvenue sur la liste des utilisateurs</h1>";
    $userController = new UserController;
    //$userController->addUser(); //J'ai créer mes 15 utilisateur avec addUser.
    $userController->list();
}, 'list_users' );

$router->map( 'GET', '/register', function () {
    // echo "<h1>Inscription</h1>";
    // $userController = new UserController;
    require_once("src/View/register.php");
}, 'register' );

$router->map( 'POST', '/register', function () {
    $userAuth = new AuthController;
    // $userAuth->register($email, $firstname, $lastname, $password);
    $userAuth->register(...$_POST);
    
}, 'register_post' );

$router->map( 'GET', '/login', function () {
    // echo "<h1>Se Connecter</h1>";
    $userController = new UserController;
    require_once("src/View/login.php");
}, 'login' );

$router->map( 'POST', '/login', function () {
    $userAuth = new AuthController;
    $userAuth->login(...$_POST);
    
}, 'login_post' );

$router->map( 'GET', '/users/[i:id]', function ($id) {
    $userController = new UserController;
    $userController->findUser($id);    
    // echo "<h1>Bienvenue sur la la page de l'utilisateur $id";
}, 'id_user' );

$router->map( 'GET', '/books/write', function () {
    echo "<h1>ajouter un livre</h1>";
    $userController = new UserController;
    require_once("src/View/book.php");
}, 'addbook' );

$router->map( 'POST', '/books/write', function () {
    session_start();
    $userController = new UserController;
    $userController->addbook(...$_POST);
    
}, 'addbook_post' );

$router->map( 'GET', '/books', function () {
    // echo "<h1>les livres</h1>";
    $userController = new UserController;
    $userController->allbooks();
}, 'list_book' );

$router->map( 'GET', '/books/[i:id]', function ($id) {
    $userController = new UserController;
    $userController->Book($id);    
}, 'find_book' );

$router->map( 'GET', '/logout', function () {
    $userController = new UserController;
    $userController->logout();
}, 'log_out' );

$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>
