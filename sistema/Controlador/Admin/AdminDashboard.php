<?php

namespace sistema\Controlador\Admin;

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
}

?>