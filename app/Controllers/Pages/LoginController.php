<?php
namespace Pages;

use Response;

class LoginController {
    private $error = null;

    public function __construct() {

        $this->error = null;
    }

    public function getLogin($page){
        if(!isset($_SESSION['userData'])){
            $title = "Bejelentkezes";
            $view = "Login";
            new Response($page, $title,$view, $this->error);
        }else{
            header('Location: /', true, 302);
        }
    } 
    public function getRegistration($page){
        $title = "Regisztráció";
        $view = "Registration";
        new Response($page, $title, $view, $this->error);
    }
    public function getLogout(){
        session_destroy();
        header('Location: bejelentkezes', true, 302);
    }
    public function postLogin($page){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new \UserModel();
        $result = $userModel->getUserByUsernamePassword($username, $password);
        $title = "Bejelentkezes";
        $view = "Login";
        $error = $result['error'];
        if($error == null){
            header('Location: /', true, 302);
        }else{
        new Response($page, $title, $view, $error);
        }
    }
}