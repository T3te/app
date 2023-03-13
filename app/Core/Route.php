<?php

class Route {

    private $method         = null;
    private $url = null;
    private $url_get = null;
    private $auth = null;
    public function __construct(){
        $this->splitUrl();

        $method         = $this->method;
        $url            = $this->url;
        $auth           = $this->auth;

        $method         = strtolower($method);
        $url_request    = $method.$url;
        $routeService   = new \RouteService;
        $routes         = $routeService->routes();
        

        if(array_key_exists($url_request, $routes)){
            $explode_service        = explode("@",$routes[$url_request]);
            $route_controller       = ucfirst($explode_service[0]);
            $route_class            = $explode_service[1];
            $route_object           = '\Pages\\'.$route_controller.'Controller';
            $page_controller_path   = CONTROLLERS.'Pages/'.$route_controller.'Controller.php';
            if (file_exists($page_controller_path)) {
                require_once($page_controller_path);
                (new $route_object )->$route_class($route_controller,$auth);
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
        $url_uri            = $_SERVER['REQUEST_URI'];
        $url_get_explode    = explode("?",$url_uri);
        $url                = htmlspecialchars(ucfirst(str_replace("/","",$url_get_explode[0])));
        $url_get            = isset($url_get_explode[1]) ? htmlspecialchars($url_get_explode[1]) : null;

        $this->method       = $_SERVER['REQUEST_METHOD'];
        $this->url          = $url;
        $this->url_get      = $url_get;
    }

}