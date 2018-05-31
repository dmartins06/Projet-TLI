<?php

include_once('Router.php');
include_once('routes.php');

require('./smarty/Smarty.class.php');

session_start();
$smarty = new Smarty();

$smarty->setTemplateDir('./pages/template');
$smarty->setCompileDir('./smarty/templates_c');
$smarty->setConfigDir('./smarty/configs');
$smarty->setCacheDir('./smarty/cache/');


$pages = "pages";
$api = "api";
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
    if($route['api']) {
	    $path = $api;
      include_once($path.'/'.$route['url']);
    } else {
	    $path = $pages;
      $smarty->display($path.'/'.$route['url']);
    }
    return;
  } 
}

// If no file is found, return the error page
    $smarty->display($pages.'/error.php');
