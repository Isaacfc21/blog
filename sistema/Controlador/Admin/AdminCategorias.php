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
                Helpers_c::redirecionar('blog/admin/categorias/listar');
            }
        }
        
        echo $this->template->renderizar('posts/formulario_c.html', []);
    }
    public function editar(int $id): void
    {
        $categoria = (new CategoriaModelo())->buscaPorId($id);

        if (!$categoria) {
            Helpers_c::redirecionar('blog/404');
            exit;
        }

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados)) {
            $categoria->titulo = $dados['titulo'];
            $categoria->texto = $dados['texto'];
            $categoria->status = $dados['status'];

            if ($categoria->salvar()) {
                $this->mensagem->sucesso('Categoria atualizada com sucesso!')->flash();
                Helpers_c::redirecionar('blog/admin/categorias/listar');
                exit;
            } else {
                $this->mensagem->alerta('Falha ao atualizar a categoria!')->flash();
                Helpers_c::redirecionar('blog/admin/categorias/listar');
                exit;
            }
        }

        echo $this->template->renderizar('posts/formulario_c.html', [
            'categoria' => $categoria,
            'categorias' => (new CategoriaModelo())->busca()->resultado(true),
        ]);
    }

    public function deletar(int $id):void
    {

        // $id =  filter_var($id, FILTER_VALIDATE_INT); 

        // if($id){

        // } OU

        if(is_int($id)){
            $categoria = (new CategoriaModelo())->buscaPorId($id);
            if(!$categoria){
                $this->mensagem->alerta('Categoria não encontrada!')->flash();
                Helpers_c::redirecionar('blog/admin/categorias/listar');
            } else {
                if($categoria->apagar("id = {$id}")){
                    $this->mensagem->sucesso('Categoria deletada com sucesso!')->flash();
                    Helpers_c::redirecionar('blog/admin/categorias/listar');
                } else {
                    $this->mensagem->erro($categoria->erro())->flash();
                    Helpers_c::redirecionar('blog/admin/categorias/listar');
                }
            }
        }

        if($id){
            $categoria = (new CategoriaModelo())->buscaPorId($id);
            if(!$categoria){
                Helpers_c::redirecionar('blog/404');
            }
        }
    }
}

?>