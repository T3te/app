<?php

class RouteService {

    public function routes(){
        $routes = [
            "get" => "Home@getHome",
            "getHome" => "Home@getHome",
            "getValami" => "Home@getHomeValami",
            "getIndex.php" => "Home@getHome302",
            "getIndex.html" => "Home@getHome302",
            "getBejelentkezes" => "Login@getLogin",
            "getKijelentkezes" => "Login@getLogout",
            "postBejelentkezes" => "Login@postLogin",
            "getRegisztracio" => "Login@getRegistration"
        ];

        return $routes;
    }

}