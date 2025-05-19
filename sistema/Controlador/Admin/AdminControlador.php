<?php

namespace sistema\Controlador\Admin;
use sistema\Nucleo\Controlador;
use sistema\Nucleo\Helpers_c;

/**
 * Class AdminControlador
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class AdminControlador extends Controlador
{
    public function __construct()
    {
      parent::__construct('templates/dashboard/views'); 
      
      $usuario = false;

      if(!$usuario){
        $this->mensagem->alerta('Você não tem permissão para acessar esta área!')->flash();
        Helpers_c::redirecionar('Aula92-103.php/admin/login');
      }
    }
}

?>