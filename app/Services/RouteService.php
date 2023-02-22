<?php

class RouteService {

    public function routes(){
        $routes = [
            "get" => "getHome",
            "getHome" => "getHome",
            "getHome2Valami" => "getHomeValami2",
            "getNotfound" => "getNotfound"
        ];

        return $routes;
    }

}