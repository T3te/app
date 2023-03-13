<?php
namespace Pages;

use Response;

class LoginController {
    private $error = null;

    public function __construct() {

        $this->error = null;
    }

    public function getLogin($page){
        $title = "Bejelentkezes";
        $view = "Login";
        new Response($page, $title,$view, $this->error);
    }
    public function getRegistration($page){
        $title = "Regisztráció";
        $view = "Registration";
        new Response($page, $title, $view, $this->error);
    }
    public function getLogout(){
        echo "HOME VALAMI";
    }
    public function postLogin($page){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new \UserModel();
        $result = $userModel->getUserByUsernamePassword($username, $password);

        $title = "Bejelentkezes";
        $view = "Login";
        $error = $result['error'];
        new Response($page, $title, $view, $error);
    }
}