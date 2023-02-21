<?php
namespace Pages;

use Response;

class HomeController {

    private $title;

    public function getHome($page){
        $title = "FŐOLDAL";
        $view = "Home";
        new Response($page, $title ,$view);
    }
    public function getHomeValami(){
        echo "HOME VALAMI";
    }
}