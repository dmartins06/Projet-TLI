<?php

include_once('Router.php');
include_once('routes.php');

$pages = "pages";
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
for ($i= 0; $i < sizeof($scriptName); $i++)
{
  if ($requestURI[$i] == $scriptName[$i])
  {
    unset($requestURI[$i]);
  }
}

$command = array_values($requestURI);
$url = implode('/',$command).'/';

$routes = Router::getRoutes();

//Find the requested file
foreach ($routes as $route) {
  if($url == $route['request']){
    include_once($pages.'/'.$route['url']);
    return;
  } 
}

// If no file is found, return the error page
    include_once($pages.'/'.'error.php');
