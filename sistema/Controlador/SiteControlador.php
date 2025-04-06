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
            'título' => 'teste de titulo',
            'subtítulo' => 'teste de subtítulo'
        ]);
    }

    public function sobre():void
    {
        echo 'pagina sobre';
    }
}

?>