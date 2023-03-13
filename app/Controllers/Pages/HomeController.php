<?php
namespace Pages;

use Response;

class HomeController {

    private $error = null;

    public function __construct() {

        $this->error = null;
    }


    public function getHome($page){
        if(isset($_SESSION['userData'])){
            $title = "FŐOLDAL";
            $view = "Home";
            new Response($page, $title ,$view, $this->error);
        }else{
            header('Location: bejelentkezes', true, 302);
        }
    }
    public function getHomeValami(){
        if(isset($_SESSION['userData'])){
        echo "HOME VALAMI";
        }else{
            header('Location: bejelentkezes', true, 302);
        }
    }
    public function getHome302(){
        header('Location: /', true, 302);
    }
}