<?php

namespace sistema\Controlador;

use sistema\Modelo\CategoriaModelo;
use sistema\Nucleo\Controlador;
use sistema\Modelo\PostModelo;
use sistema\Nucleo\Helpers_c;

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
        $posts = (new PostModelo())->busca(null,'rand()');

        echo $this->template->renderizar('index.html', [
            'posts' => $posts->resultado(true),
            'categorias' => $this->categorias(),
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
    public function post(int $id):void
    {
        $post = (new PostModelo())->buscaporID($id);
        if(!$post){
            Helpers_c::redirecionar(URL_SITE . '404');
        }
        echo $this->template->renderizar('post.html', [
            'post' => $post,
            'categorias' => $this->categorias(),
        ]);
    }
    public function categoria(int $id):void
    {
        $posts = (new CategoriaModelo())->posts($id);

        if(!$posts){
            Helpers_c::redirecionar(URL_SITE . '404');
        }
        echo $this->template->renderizar('categoria.html', [
            'posts' => $posts,
            'categorias' => $this->categorias(),
        ]);
    }
    public function categorias()
    {
        return (new CategoriaModelo())->busca()->resultado(true);
    }
    public function buscar(): void
    {
        $busca = filter_input(INPUT_POST, 'busca', FILTER_DEFAULT);

        if ($busca) {
            $posts = (new PostModelo())->pesquisa($busca);

            if ($posts && count($posts) > 0) {
                foreach ($posts as $post) {
                    echo "<li class='list-group-item fw-bold'>
                            <a href='" . Helpers_c::url('/Aula68-79.php/post/') . $post->id . "' class='link_post'>
                                $post->titulo
                            </a>
                        </li>";
                }
            } else {
                // Retorna uma string clara para o JS detectar
                echo "<li class='nenhum-resultado'></li>";
            }
        }
    }

}

// public function categoria(int $id):void
// {
//     $categoria= (new CategoriaModelo())->buscaporID($id);
//     if(!$categoria){
//         Helpers_c::redirecionar(URL_SITE . '404');
//     }
//     echo $this->template->renderizar('categoria.html', [
//         'categoria' => $categoria,
//     ]);
// }
?>