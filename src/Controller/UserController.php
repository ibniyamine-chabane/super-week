<?php 
namespace App\Controller;

use App\Model\UserModel;
use Faker;
class UserController 
{
 
    public function addUser()
    {
        
        $faker = Faker\Factory::create();
        $usermodel = new UserModel;
        for ($i=0; $i < 15; $i++) 
        { 
            $firstname = $faker->firstName();
            $lastname = $faker->lastName();
            $email = strtolower("$firstname.$lastname@gmail.com");
            $usermodel->insert($email, $firstname, $lastname);
        } 
    }

    public function list() 
    {
        $usermodel = new UserModel;
        echo json_encode($usermodel->findAll());
    }

    public function findUser($id) 
    {
        $_GET['id'] = $id;
        $usermodel = new Usermodel;
        echo json_encode($usermodel->find($id));
    }
    
    
}
?>
