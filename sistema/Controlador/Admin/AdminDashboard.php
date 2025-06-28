<?php

namespace sistema\Controlador\Admin;
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
        echo $this->template->renderizar('dashboard.html', []);
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