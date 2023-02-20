<?php
    function controllersAutoload($className) {
        $classPath = CONTROLLERS.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
  
    function servicesAutoload($className) {
        $classPath = SERVICES.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
    function modelsAutoload($className) {
        $classPath = MODELS.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
    function viewsAutoload($className) {
        $classPath = MODELS.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
    spl_autoload_register("controllersAutoload");
    spl_autoload_register("servicesAutoload");
    spl_autoload_register("modelsAutoload");
    spl_autoload_register("viewsAutoload");


