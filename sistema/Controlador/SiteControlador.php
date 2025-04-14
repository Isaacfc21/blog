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
            
        ]);
    }

    public function sobre():void
    {
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'Sobre nós',
            'descricao' => 'Esta é uma página sobre o nosso projeto do TCE'
        ]);
    }
    public function erro404():void
    {
        echo $this->template->renderizar('404.html', [
            'titulo' => 'Página não encontrada',
        ]);
    }
}

?>