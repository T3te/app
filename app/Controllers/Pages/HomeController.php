<?php
namespace Pages;

use Response;

class HomeController {

    private $error = null;

    public function __construct() {

        $this->error = null;
    }


    public function getHome($page){
        $title = "FŐOLDAL";
        $view = "Home";
        new Response($page, $title ,$view, $this->error);
    }
    public function getHomeValami(){
        echo "HOME VALAMI";
    }
    public function getHome302(){
        header('Location: /', true, 302);
    }
}