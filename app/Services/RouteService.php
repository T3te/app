<?php

class RouteService {

    public function routes(){
        $routes = [
            "get" => "Home@getHome",
            "getHome" => "Home@getHome",
            "getIndex.php" => "Home@getHome302",
            "getIndex.html" => "Home@getHome302",
            "getBejelentkezes" => "Login@getLogin",
            "postBejelentkezes" => "Login@postLogin",
            "getRegisztracio" => "Login@getRegistration"
        ];

        return $routes;
    }

}