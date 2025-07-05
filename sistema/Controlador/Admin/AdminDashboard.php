<?php

namespace sistema\Controlador\Admin;

use sistema\Modelo\UsuarioModelo;
use sistema\Modelo\PostModelo;
use sistema\Nucleo\Sessao;
use sistema\Nucleo\Helpers_c;

/**
 * Class AdminDashboard
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class AdminDashboard extends AdminControlador
{
    public function dashboard():void
    {
        $posts = new PostModelo();
        $usuarios = new UsuarioModelo();

        echo $this->template->renderizar('dashboard.html', [
            'posts' =>[
                'total' => $posts->busca()->total(),
                'ativo' => $posts->total('status = 1'),
                'inativo' => $posts->total('status = 0'),
            ],
            'usuarios' =>[
                'total' => $usuarios->busca()->total(),
                'ativo' => $usuarios->total('status = 1'),
                'inativo' => $usuarios->total('status = 0'),
            ]
        ]);
    }
    public function sair(): void
    {
        $this->usuario->ultimo_logout = date('Y-m-d H:i:s');
        $this->usuario->salvar();   
        $this->mensagem->informa('Você saiu do painel de controle!')->flash();
        (new Sessao())->limpar('usuarioId');
        Helpers_c::redirecionar('blog/admin/login');
    }

    
}

?>