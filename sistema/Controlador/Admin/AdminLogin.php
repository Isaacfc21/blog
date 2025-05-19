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
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados)){
            if(in_array('', $dados)){
                $this->mensagem->erro('Preencha todos os campos!')->flash();
            }elseif(strlen($dados['senha']) < 6){
                $this->mensagem->erro('A senha deve ter no mínimo 6 caracteres!')->flash();
            }else{
              $this->mensagem->sucesso('Login Efetuado com sucesso!')->flash();
            }
        }

        echo $this->template->renderizar('login.html', []);
    }
    
    // private function ChecarDados(array $dados):bool
    // {
    //     if(empty($dados['email'])){
    //         $this->mensagem->erro('Campo de email obrigatório!')->flash();
    //         return false;
    //     }

    //     if(empty($dados['senha'])){
    //         $this->mensagem->erro('Campo de senha obrigatório!')->flash();
    //         return false;
    //     }

    //     if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
    //         $this->mensagem->erro('Email inválido!')->flash();
    //         return false;
    //     }

    //     if(strlen($dados['senha']) < 6){
    //         $this->mensagem->erro('A senha deve ter no mínimo 6 caracteres!')->flash();
    //         return false;
    //     }
    //   return true;
    // }
}

?>