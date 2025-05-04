<?php

namespace sistema\Controlador\Admin;
use sistema\Modelo\CategoriaModelo;
use sistema\Nucleo\Helpers_c;

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
            (new CategoriaModelo())->armazenar($dados);
            Helpers_c::redirecionar('Aula80-91.php/admin/categorias/listar');
        }
        
        echo $this->template->renderizar('posts/formulario_c.html', []);
    }
    public function editar(int $id):void
    {
        $categoria = (new CategoriaModelo())->buscaporId($id);
        
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            // (new CategoriaModelo())->armazenar($dados);
            Helpers_c::redirecionar('Aula80-91.php/admin/categorias/listar');
        }

        if(!$categoria){
            Helpers_c::redirecionar('Aula80-91.php/404');
        }
        echo $this->template->renderizar('posts/formulario_c.html', [
            'categoria' => $categoria,
        ]);
    }
}

?>