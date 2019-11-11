<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Usuario extends DataLayer
{
    public function __construct()
    {
        parent::__construct('usuarios', ['primeiro_nome', 'ultimo_nome'], 'id', true);
    }

    public function enderecos()
    {
        return (new Endereco())->find("user_id = :uid", "uid = {$this->id}")->fetch(true);
    }
}
