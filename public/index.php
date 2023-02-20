<?php
declare(strict_types=1);
use Controllers\RouteController;

session_start();
error_reporting(E_ALL);
ini_set("display_errors", "1");
require_once('../config/config.php');
require_once('../autoload.php');


new RouteController;


