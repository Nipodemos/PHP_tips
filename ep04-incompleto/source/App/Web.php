<?php

namespace Source\App;

class Web
{
    public function home($data)
    {
        echo "<h1> Página home</h1>";
        var_dump($data);
    }

    public function blog($data)
    {
        echo "<h1> Página blog</h1>";
        var_dump($data);
    }

    public function article($data)
    {
        echo "<h1> Página artigo</h1>";
        var_dump($data);
    }

    public function category($data)
    {
        echo "<h1> Página categoria</h1>";
        var_dump($data);
    }

    public function contact($data)
    {
        echo "<h1> Página contato</h1>";
        var_dump($data);
    }

    public function error($data)
    {
        echo "<h1> Erro código {$data['errcode']}</h1>";
        var_dump($data);
    }
}
