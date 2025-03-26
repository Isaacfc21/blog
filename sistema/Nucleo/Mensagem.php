<?php

/**
 * @author Isaac Dias Luz Caraça <isaaccaracayahoo@gmail.com>
 */

class Mensagem
{
    private $texto;
    private $css;

    /**
     * Método responsável pela renderização
     * @return string renderizada
     */

    public function renderizar(): string
    {
        return $this->texto = $this->filtrar('<h1>mensagem de teste');
    } 

    /**
     * Método responsável pela filtragem da mensagem
     * @param string mensagem a ser filtrada
     * @return string mensagem filtrada
     */

    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    } 

    // public $texto;
    // public $css;
}

?>