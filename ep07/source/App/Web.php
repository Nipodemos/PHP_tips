<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__ . "/../../theme", "php");
    }

    public function home($data): void
    {
        $users = (new User())->find()->fetch(true);

        echo $this->view->render("home", [
            "title" => "Home | " . SITE,
            'users' => $users
        ]);
    }

    public function contact($data): void
    {
        echo "<h1>Página Contato</h1>";
    }

    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "Erro {$data['errcode']} | " . SITE,
            "error" => $data['errcode']
        ]);
    }
}
