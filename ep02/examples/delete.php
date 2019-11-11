<?php

require __DIR__ . "/../vendor/autoload.php";

use Example\Models\Usuario;
use Example\Models\Endereco;

$user = new Usuario();
$user->findById(5);

if ($user) {
    $user->destroy();
}

var_dump($user);
