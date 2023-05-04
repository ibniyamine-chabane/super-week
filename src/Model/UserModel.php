<?php 
namespace App\Model;
use PDO;
class UserModel 
{

    public function insert($email ,$firstname, $lastname)
    {
        $database = new PDO('mysql:host=localhost;dbname=superweek;charset=utf8;port=3307', 'root', '');
        $query = "INSERT INTO user (email, first_name, last_name) VALUES ((?) ,(?) ,(?))";
        $stmt = $database->prepare($query);
        $stmt->execute(array($email, $firstname, $lastname));
    }

    public function findAll() 
    {
        $database = new PDO('mysql:host=localhost;dbname=superweek;charset=utf8;port=3307', 'root', '');
        $query = "SELECT * FROM user";
        $stmt = $database->prepare($query);
        $stmt->execute(array());
        return $allUser = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>