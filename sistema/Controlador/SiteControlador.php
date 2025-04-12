<?php

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;

/**
 * Description of SiteControlador
 * 
 * @author Isaac
 */

class SiteControlador extends Controlador
{

    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index():void
    {
        echo $this->template->renderizar('index.html', [
            'titulo' => 'Página Inicial',
            'subtitulo' => 'teste de subtítulo'
        ]);
    }

    public function sobre():void
    {
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'Sobre nós',
            'descricao' => 'Esta é uma página sobre o nosso projeto do TCE'
        ]);
    }
}

?>