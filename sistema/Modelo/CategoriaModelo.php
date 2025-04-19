<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;
/**
 * Class PostModelo
 * 
 * @author Isaac Caraça <isaaccaracayahoo@gmail.com>
 */

class CategoriaModelo
{
    public function ler(?int $id = null):array
    {
        $where = ($id ? "WHERE id = {$id}" : '' );
        // $query = "SELECT * FROM categorias WHERE id = 3 AND status = 1 OR status = 0";
        // $query = "SELECT * FROM categorias LIMIT 2 OFFSET 2";
        // $query = "SELECT * FROM categorias WHERE titulo = 'titulo do post' ";
        $query = "SELECT * FROM categorias {$where}";
        $stmt = Conexao::getInstancia()->query($query);

        $resultado = $stmt->fetchAll();

        // var_dump($resultado);

        return $resultado;
    }
}


?>