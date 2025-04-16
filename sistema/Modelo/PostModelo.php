<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;
/**
 * Class PostModelo
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class PostModelo
{
    public function ler():array
    {
        $query = "SELECT * FROM posts ";
        $stmt = Conexao::getInstancia()->query($query);

        $resultado = $stmt->fetchAll();

        // var_dump($resultado);

        return $resultado;
    }
}


?>