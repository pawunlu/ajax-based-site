<?php

namespace App\Controllers;

class HomeController
{
    /**
     * Show the home page.
     */
    public function index()
    {
        return view('index');
    }

    public function start()
    {
        header('Content-Type: application/json');
        $contenido_inicio = [
            "nav" => [
                "item 1",
                "item 2",
                "item 3",
            ],
            "main" => [
                "section_uno" => "Seccion uno",
                "section_dos" => "Seccion uno",
                "section_uno" => [
                    "article_uno" => "articulo uno",
                    "article_dos" => "articulo dos",
                ],
            ],
            "footer" => [
                "link 1",
                "link 2",
            ],
        ];
        return json_encode($contenido_inicio);
    }
}
