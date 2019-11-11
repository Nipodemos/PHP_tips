<?php

require __DIR__ . "/../vendor/autoload.php";

use Example\Models\Usuario;
use Example\Models\Endereco;

$user = new Usuario();

$user->first_name = "Pedro";
$user->last_name  = "Leite";
$user->genre      = 'M';

$user->save();

$address = new Endereco();
$address->add($user, "nome da rua", '44');

$address->save();
var_dump($user);
