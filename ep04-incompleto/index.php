<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace("Source\App");

/*
* Web
* home
*/
$router->group(null);
$router->get("/", "Web:home");
$router->get("/{filter}", "Web:home");
$router->get("/{filter}/{page}", "Web:home");

/**
 * BLOG
 */
$router->group("blog");
$router->get("/", "Web:blog");
$router->get("/{post_uri}", "Web:article");
$router->get("/categoria/{cat_uri}", "Web:category");

/**
 * CONTATO
 */
$router->group("contato");
$router->get("/", "Web:contact");
$router->post("/", "Web:contact");
$router->delete("/", "Web:contact");
$router->get("/{sector}", "Web:contact");

/**
 * ADMIN
 * home
 */
$router->group("admin");
$router->get("/", "admin:home");

/**
 * ERRORS
 */
$router->group("ooops");
$router->get("/{errcode}", "Web:error");


$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}
