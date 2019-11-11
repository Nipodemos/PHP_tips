<?php

require __DIR__ . "/../vendor/autoload.php";


use Source\Models\Usuario;

$user = new Usuario();
$list = $user->find()->fetch(true);

/**
 * @var $userItem Usuario
 */
foreach ($list as $userItem) {
    var_dump($userItem->data());
    var_dump($userItem->enderecos);
}





/* use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if ($error) {
    echo $error->getMessage();
    die();
}

$query = $conn->query("SELECT * FROM usuarios");

var_dump($query->fetchAll()); */
