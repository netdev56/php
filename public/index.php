<?php

use Router\Router;

require '../vendor/autoload.php';

// Test si la redirection d'url fonctionne - fichier htaccess
echo $_GET['url'];

$router = new Router($_GET['url']);
$router->show();