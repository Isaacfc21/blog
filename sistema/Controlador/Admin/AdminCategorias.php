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
        $categoria = new CategoriaModelo();
        echo $this->template->renderizar('posts/categoria.html', [
            'categorias' => $categoria->busca()->ordem('status DESC, id DESC')->resultado(true),
            'total' => [
                'total' => $categoria->total(),
                'ativo' => $categoria->total('status = 1'),
                'inativo' => $categoria->total('status = 0')
            ]
        ]);
    }
    public function cadastrar():void
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            $categoria  = new CategoriaModelo();

            $categoria->titulo = $dados['titulo'];
            $categoria->texto = $dados['texto'];
            $categoria->status = $dados['status'];

            if($categoria->salvar()){
                $this->mensagem->sucesso('Categoria cadastrada com sucesso!')->flash();
                Helpers_c::redirecionar('Aula92-103.php/admin/categorias/listar');
            }
        }
        
        echo $this->template->renderizar('posts/formulario_c.html', []);
    }
    public function editar(int $id):void
    {
        $categoria = (new CategoriaModelo())->buscaporId($id);
        
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            
            $this->mensagem->alerta('Categoria editada com sucesso!')->flash();
            Helpers_c::redirecionar('Aula92-103.php/admin/categorias/listar');
        }

        if(!$categoria){
            Helpers_c::redirecionar('Aula92-103.php/404');
        }
        echo $this->template->renderizar('posts/formulario_c.html', [
             'categoria' => $categoria,
        ]);
    }
    public function deletar(int $id):void
    {
        (new CategoriaModelo())->deletar($id);
            Helpers_c::redirecionar('Aula92-103.php/admin/categorias/listar');
    }
}

?>