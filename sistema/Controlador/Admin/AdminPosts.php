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
        $post = new PostModelo();
        echo $this->template->renderizar('posts/listar.html', [
            'posts' => $post->busca()->ordem('status DESC, id DESC')->resultado(true),
            'total' => [
                'total' => $post->total(),
                'ativo' => $post->total('status = 1'), 
                'inativo' => $post->total('status = 0')
            ]
        ]);
    }
    public function cadastrar():void
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(isset($dados)){
            (new PostModelo())->armazenar($dados);
            $this->mensagem->sucesso('Post cadastrado com sucesso!')->flash();
            Helpers_c::redirecionar('Aula92-103.php/admin/posts/listar');
        }

        echo $this->template->renderizar('posts/formulario_p.html', [
            'categorias' => (new CategoriaModelo())->busca(),
        ]);
    }
    public function editar( int $id):void
    {
        $post = (new PostModelo())->buscaPorId($id);

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(isset($dados)){
            (new PostModelo())->atualizar($dados, $id);
            $this->mensagem->alerta('Post editado com sucesso!')->flash();
            Helpers_c::redirecionar('Aula92-103.php/admin/posts/listar');
        }

        if(!$post){
            Helpers_c::redirecionar('Aula92-103.php/404');
        }
        echo $this->template->renderizar('posts/formulario_p.html', [
            'post' => $post,
            'categorias' => (new CategoriaModelo())->busca(),
        ]);
    }
    public function deletar(int $id):void
    {
        (new PostModelo())->deletar($id);
            Helpers_c::redirecionar('Aula92-103.php/admin/posts/listar');
    }
}

?>