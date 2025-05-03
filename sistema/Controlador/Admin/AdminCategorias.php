<?php

namespace sistema\Controlador\Admin;
use sistema\Modelo\CategoriaModelo;

/**
 * Class AdminCategorias
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class AdminCategorias extends AdminControlador
{
    public function listar():void
    {
        echo $this->template->renderizar('posts/categoria.html', [
            'categorias' => (new CategoriaModelo())->busca(),
        ]);
    }
}

?>