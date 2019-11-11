<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;


class Endereco extends DataLayer
{
    public function __construct()
    {
        parent::__construct('enderecos', ['id_user', 'rua', 'numero'], 'id_adress', false);
    }

    public function add(Usuario $usuario, string $rua, string $numero): Endereco
    {
        $this->user_id = $usuario->id;
        $this->rua = $rua;
        $this->numero = $numero;


        return $this;
    }
}
