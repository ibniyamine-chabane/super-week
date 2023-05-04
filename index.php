<?php 
use App\Controller\UserController;
use Faker;

require_once('vendor/autoload.php');

$router = new AltoRouter();
$router->setBasePath('/super-week');

$router->map( 'GET', '/', function () {
    echo "<h1>Bienvenu sur l'acceueil</h1>";
}, 'home' );

$router->map( 'GET', '/users', function () {
    echo "<h1>Bienvenu sur la liste des utilisateurs</h1>";
    $userController = new UserController;
    // $userController->addUser(); J'ai créer mes 15 utilisateur avec addUser.
    $userController->list();
}, 'list_users' );

$router->map( 'GET', '/register', function () {
    echo "<h1>Inscription</h1>";
    $userController = new UserController;
    require_once("src/View/register.php");
}, 'register' );

$router->map( 'GET', '/users/[i:id]', function ($id) {
    echo "<h1>Bienvenu sur la la page de l'utilisateur $id";
}, 'id_user' );

$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>
