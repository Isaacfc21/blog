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
    public function cadastrar():void
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            
        }
        
        echo $this->template->renderizar('posts/formulario_c.html', []);
    }
}

?>