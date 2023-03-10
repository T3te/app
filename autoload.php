<?php

    function controllersAutoload($className) {
        $classPath = CONTROLLERS.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
    function coreAutoload($className) {
        $classPath = CORE.$className.".php";
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
        $classPath = VIEWS.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
    function sessionsAutoload($className) {
        $classPath = SESSIONS.$className.".php";
        if (file_exists($classPath)) {
            include_once $classPath;
        }
    }
    spl_autoload_register("controllersAutoload");
    spl_autoload_register("coreAutoload");
    spl_autoload_register("servicesAutoload");
    spl_autoload_register("modelsAutoload");
    spl_autoload_register("viewsAutoload");
    spl_autoload_register("sessionsAutoload");


