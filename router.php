<?php
$uri  = parse_url($_SERVER['REQUEST_URI'])['path'];
// if ($uri === '/mastering_php') {
//     require('controllers/index.php');
// } else if ($uri === '/mastering_php/about') {
//     // dd($uri);
//     require('controllers/about.php');
// }else if($uri  === '/mastering_php/contact'){
//     require('controllers/contact.php');
// }
 function routeToContoller($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require($routes[$uri]);
      }else{
         abort();
      }
 }
 function abort($code =404){

    http_response_code($code);
    require('views/{$code}.php');
    die();
 }
$routes = [
    '/mastering_php/' =>'controllers/index.php',
    '/mastering_php/about/' =>'controllers/about.php',
    '/mastering_php/contact/' =>'controllers/contact.php',
];

routeToContoller($uri,$routes);