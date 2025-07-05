<?php

namespace sistema\Controlador\Admin;

use sistema\Modelo\UsuarioModelo;

// use sistema\Modelo\PostModelo;
// use sistema\Modelo\CategoriaModelo;
use sistema\Nucleo\Helpers_c;

/**
 * Class AdminUsuarios
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class AdminUsuarios extends AdminControlador
{
    public function listar():void
    {
        $usuario = new UsuarioModelo();

        echo $this->template->renderizar('usuarios.html', [
            'usuarios' => $usuario->busca()->ordem('status DESC, id ASC')->resultado(true),
            'total' => [
                'usuarios' => $usuario->busca('level != 3')->total(),
                'usuariosAtivo' => $usuario->total('status = 1 AND level != 3'),
                'usuariosInativo' => $usuario->total('status = 0 AND level != 3'),
                'admin' => $usuario->busca('level = 3')->total(),
                'adminAtivo' => $usuario->total('status = 1 AND level = 3'),
                'adminInativo' => $usuario->total('status = 0 AND level = 3'),
            ]
        ]);
    }
    public function cadastrar():void
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(isset($dados)){
            if($this->validarDados($dados)){
                if(empty($dados['senha'])){
                    $this->mensagem->alerta('O campo senha é obrigatório!')->flash();
                }else{
                    $usuario = new UsuarioModelo();
                    $usuario->nome = $dados['nome'];
                    $usuario->email = $dados['email'];
                    $usuario->senha = $dados['senha'];
                    $usuario->level = $dados['level'];
                    $usuario->status = $dados['status'];
                    $usuario->cadastrado_em = date('Y-m-d H:i:s');
                }
            }

            if($usuario->salvar()){
                $this->mensagem->sucesso('Usuario cadastrado com sucesso!')->flash();
                Helpers_c::redirecionar('blog/admin/usuarios/listar');
            }else{
                $this->mensagem->erro($usuario->erro())->flash();
                Helpers_c::redirecionar('blog/admin/usuarios/cadastrar');
            }
        }

        echo $this->template->renderizar('formulario_u.html', [
            'usuario' => $dados
        ]);
    }
    public function editar( int $id):void
    {
        $usuario = (new UsuarioModelo())->buscaPorId($id);

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(isset($dados)){
            if($this->validarDados($dados)){
                $usuario = (new UsuarioModelo())->buscaPorId($id);
                $usuario->nome = $dados['nome'];
                $usuario->email = $dados['email'];
                $usuario->senha = (!empty($dados['senha']) ? $dados['senha'] : $usuario->senha);
                $usuario->level = $dados['level'];
                $usuario->status = $dados['status'];
                $usuario->atualizado_em = date('Y-m-d H:i:s');
                
            }

            if($usuario->salvar()){
                $this->mensagem->sucesso('Usuario atualizado com sucesso!')->flash();
                Helpers_c::redirecionar('blog/admin/usuarios/listar');
            }else{
                $this->mensagem->erro($usuario->erro())->flash();
                Helpers_c::redirecionar('blog/admin/usuarios/editar');
            }
        }

        echo $this->template->renderizar('formulario_u.html', [
            'usuario' => $usuario,
        ]);
    }
    public function deletar(int $id):void
    {

        // $id =  filter_var($id, FILTER_VALIDATE_INT); 

        // if($id){

        // } OU

        if(is_int($id)){
            $usuario = (new UsuarioModelo())->buscaPorId($id);
            if(!$usuario){
                $this->mensagem->alerta('Usuario não encontrado!')->flash();
                Helpers_c::redirecionar('blog/admin/usuarios/listar');
            } else {
                if($usuario->deletar()){
                    $this->mensagem->sucesso('Usuario deletado com sucesso!')->flash();
                    Helpers_c::redirecionar('blog/admin/usuarios/listar');
                } else {
                    $this->mensagem->erro($usuario->erro())->flash();
                    Helpers_c::redirecionar('blog/admin/usuarios/listar');
                }
            }
        }

        if($id){
            $usuario = (new UsuarioModelo())->buscaPorId($id);
            if(!$usuario){
                Helpers_c::redirecionar('blog/404');
            }
        }
    }

    public function validarDados(array $dados): bool
    {

        if(empty($dados['nome'])){
            $this->mensagem->alerta('O campo nome é obrigatório!')->flash();
            return false;
        }

        if(empty($dados['email'])){
            $this->mensagem->alerta('O campo e-mail é obrigatório!')->flash();
            return false;
        }

        if(!Helpers_c::validarEmail($dados['email'])){
            $this->mensagem->alerta('O campo email é obrigatório!')->flash();
            return false;
        }

        return true;
    }
}

?>