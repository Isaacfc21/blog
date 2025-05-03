<?php

namespace sistema\Controlador\Admin;
use sistema\Modelo\PostModelo;
use sistema\Modelo\CategoriaModelo;

/**
 * Class AdminPosts
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class AdminPosts extends AdminControlador
{
    public function listar():void
    {
        echo $this->template->renderizar('posts/listar.html', [
            'posts' => (new PostModelo())->busca(),
        ]);
    }
}

?>