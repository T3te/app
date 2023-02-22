<?php

class Route {

    private $method         = null;
    private $url_controller = null;
    private $url_action     = null;
    private $url_get     = null;
    public function __construct(){
        $this->splitUrl();

        $method         = $this->method;
        $url_controller = $this->url_controller;
        $url_action     = $this->url_action;
        $url_get        = $this->url_get;

        $method         = strtolower($method);
        $url_controller = ($url_controller == "" ) ? "Home" : ucfirst($url_controller);
        $url_action     = isset($url_action) ? ucfirst($url_action) : null;
        $url_request    = $method.$url_controller.$url_action;
        $route_service  = new \RouteService;
        $routes         = $route_service->routes();

        if(array_key_exists($url_request, $routes)){
            $page_controller_path = CONTROLLERS.'Pages/'.$url_controller."Controller.php";
            if (file_exists($page_controller_path)) {
                require_once($page_controller_path);
                $controller_class = '\Pages\\'.$url_controller."Controller";
                $url_response = $routes[$url_request];
                (new $controller_class)->$url_response($url_controller);

    
            } else {
                logMessage('ROUTE','( '.$url_request.' ) HIBA RouteService');
                die("Sajnáljunk valami hiba történt.");
            }
                        
        }else{
            http_response_code(404);
            (new \Pages\NotfoundController)->getNotfound();
        }
    }

    public function splitUrl(){
        $url_uri = $_SERVER['REQUEST_URI'];
        $url_get_explode = explode("?",$url_uri);
        $url = $url_get_explode[0];
        $url_get = isset($url_get_explode[1]) ? $url_get_explode[1] : null;
        $url =  explode("/",$url);
        $this->method = $_SERVER['REQUEST_METHOD'];

        if(count($url)<4){
            $this->url_controller = isset($url[1]) ? $url[1] : null;
            $this->url_action = isset($url[2]) ? $url[2] : null;
            $this->url_get = $url_get;
        }else{
            http_response_code(404);
            $this->url_controller = "NotfoundController";
            logMessage('404',$url_uri.' NINCS ILYEN OLDAL');
        }

    }

}