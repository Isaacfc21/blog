<?php

namespace sistema\Controlador\Admin;
use sistema\Nucleo\Controlador;
use sistema\Nucleo\Helpers_c;

/**
 * Class AdminLogin
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class AdminLogin extends Controlador
{
    public function __construct()
    {
      parent::__construct('templates/dashboard/views'); 
    }

    public function login():void
    {
        // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        // if(isset($dados)){
        //     $usuario = new UsuarioModelo();
        //     $usuario->email = $dados['email'];
        //     $usuario->senha = $dados['senha'];

        //     if($usuario->logar()){
        //         $this->mensagem->sucesso('Login realizado com sucesso!')->flash();
        //         Helpers_c::redirecionar('Aula92-103.php/admin/dashboard');
        //     }else{
        //         $this->mensagem->erro('Erro ao realizar login!')->flash();
        //     }
        // }

        echo $this->template->renderizar('login.html', []);
    }
}

?>