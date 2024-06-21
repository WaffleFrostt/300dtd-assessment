<?php

//-------------------------------------------------------------
// Libraries
require_once 'lib/debug.php';
require_once 'lib/router.php';


//-------------------------------------------------------------
// Site Configuration
const SITE_NAME  = 'Master Password';
const SITE_OWNER = 'Waimea College';


//-------------------------------------------------------------
// Initialise the router
$router = new Router(['debug' => true]);


//-------------------------------------------------------------
// Define routes

$router->route(GET, PAGE, '/',      'pages/home.php');
$router->route(GET, PAGE, '/about', 'pages/about.php');
$router->route(GET, PAGE, '/test', 'pages/test.php');

$router->route(GET,    HTMX, '/info',    'components/info.php');


//-------------------------------------------------------------
// Generate the required view
$router->view();

?>
