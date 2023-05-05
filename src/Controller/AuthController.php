<?php
namespace App\Controller;

use App\Model\UserModel;

class AuthController 
{

    public function register($email, $firstname, $lastname, $password, $password_confirm)
    {   
        $email = htmlspecialchars(trim($email));
        $firstname = htmlspecialchars(trim($firstname));
        $lastname = htmlspecialchars(trim($lastname));
        $password = htmlspecialchars(trim($password));
        $password_confirm = htmlspecialchars(trim($password_confirm));
        $usermodel = new UserModel;
        $userData = $usermodel->findAll();
        // $password_confirm = $_POST["password_confirm"];
        $isAvailable = false;
        $isPasswordOk = false;

        foreach ($userData as $user) 
        {
        
            if ($email == $user['email'])
            {
                echo "Cette adresse email est déjà pris";
                $isAvailable = false;
                break;
            } else {
                $isAvailable = true;
            }      
            
            if ($password != $password_confirm)
            {
                echo "la confirmation de mdp ne correspond pas";
                $isPasswordOk = false;
                break;
            } else {
                $isPasswordOk = true;
            }    
        }

        if ($isAvailable == true && $isPasswordOk = true) 
        {
        $usermodel->registerUser($email, $firstname, $lastname, $password); 
        }
    }
}

?>