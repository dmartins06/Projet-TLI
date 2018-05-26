<?php

class  Router{

  static $routes = array();

  public static function addRoute($request, $url){
    self::$routes[] = [
      'request'  =>  $request, 
      'url'   =>  $url,
      'api' => false,
    ];
  }

  public static function addRouteApi($request, $url){
    self::$routes[] = [
      'request'  =>  $request, 
      'url'   =>  $url,
      'api' => true,
    ];
  }

  public static function getRoutes(){
    return self::$routes;
  }

  // Find the url related with the requested route
  public static function getRoute($request){
    foreach (self::$routes as $route){
      if($request == $route['request']){
        echo $route['request'];
        break;
      }
    }
  }
}

