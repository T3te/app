<?php
namespace Pages;

use Response;

class LoginController {

    public function getLogin($page){
        $title = "Bejelentkezes";
        $view = "Login";
        new Response($page, $title ,$view);
    }
    public function getRegistration($page){
        $title = "Regisztráció";
        $view = "Registration";
        new Response($page, $title ,$view);
    }
    public function getLogout(){
        echo "HOME VALAMI";
    }
}