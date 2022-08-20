<?php


$router->get('', 'controller/index.php');
$router->get('about',  'controller/about.php');
$router->get('about/culture', 'controller/about-culture.php');
$router->get('contact', 'controller/contact.php');
$router->get('404',  'views/404-page.view.php');


// $router->define('', 'controller/index.php');
// $router->define('about', 'controller/about.php');
// $router->define('about/culture', 'controller/about-culture.php');
// $router->define('contact', 'controller/contact.php');