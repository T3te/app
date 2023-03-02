<?php

class RouteService {

    public function routes(){
        $routes = [
            "get" => "Home@getHome",
            "getHome" => "Home@getHome",
            "getBejelentkezes" => "Login@getLogin",
            "getRegisztracio" => "Login@getRegistration"
        ];

        return $routes;
    }

}