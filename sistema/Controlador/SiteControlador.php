<?php

namespace sistema\Controlador;

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
        $posts = (new PostModelo())->busca();
        echo $this->template->renderizar('index.html', [
            'posts' => $posts
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
        ]);
    }
}

?>