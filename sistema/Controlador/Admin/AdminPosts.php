<?php

namespace sistema\Controlador\Admin;
use sistema\Modelo\PostModelo;
use sistema\Modelo\CategoriaModelo;
use sistema\Nucleo\Helpers_c;

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
    public function cadastrar():void
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            (new PostModelo())->armazenar($dados);
            Helpers_c::redirecionar('Aula80-91.php/admin/posts/listar');
        }

        echo $this->template->renderizar('posts/formulario_p.html', [
            'categorias' => (new CategoriaModelo())->busca(),
        ]);
    }
}

?>