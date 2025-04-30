<?php

namespace sistema\Controlador\Admin;
use sistema\Nucleo\Controlador;

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
    }
}

?>