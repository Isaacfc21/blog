<?php
    #echo("Arquivo de Funções");

function validarCPF(string $cpf): bool
{
    $cpf = limparNumero($cpf);

    if(mb_strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)){
        return false;
    }
    for($t = 9; $t < 11; $t++){
        for($d = 0, $c = 0; $c < $t; $c++){
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;

        if($cpf[$c] != $d){
            return false;
        }
    }
    return true;
}

function limparNumero(string $numero): string
{
    return preg_replace('/[^0-9]/', '', $numero);
}

/**
 * Saudação de acordo com o horário
 * @return string saudação
 */

function saudacao_match(): string
{
    $hora = date('H');
    // $hora = '18';

    // $saudacao = match($hora){
    //     '23' => 'Boa noite',
    //     default => 'Bom dia'
    // }; 
    
    // $saudacao = match($hora){
    //     '18', '19', '20', '21', '22', '23', '24' => 'Boa noite',
    // };
    
    $saudacao = match(true){
        $hora >= 0 && $hora <= 5 => 'Boa madrugada',
        $hora >= 6 and $hora <= 12 => 'Bom dia',
        $hora >= 13 and $hora <= 18 => 'Boa tarde',
        default => 'Boa noite'
    }; 

    return $saudacao;
}

/**
 * Saudação de acordo com o horário
 * @return string saudação
 */

function saudacao_switch(): string
{
    $hora = date('H');

    switch($hora){
        case $hora >= 0 && $hora <= 5:
            $saudacao = "Boa madrugada";
            break;
        case $hora >= 6 and $hora <= 12:
            $saudacao = "Bom dia";
            break;
        case $hora >= 13 and $hora <= 18:
            $saudacao = "Boa tarde";
            break;
        default:
            $saudacao = "Boa noite";

    }

    return $saudacao;
}
 
/**
 * Gera URL Amigável
 * @param string $string a ser codificada
 * @return string slug pronto
 */

function slug(string $string): string
{
    // Usar iconv para remover acentos e caracteres especiais
    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    
    // Remover caracteres especiais (aqueles não alfanuméricos, incluindo pontuação e símbolos)
    $slug = preg_replace('/[^a-zA-Z0-9\s]/', '', $slug);

    $slug = strip_tags(trim($slug));

    $slug = str_replace(' ', '_', $slug);

    // $slug = str_replace(['_____', '____', '___', '__', '_'], '_' ,$slug);

    $slug = preg_replace('/_+/', '_', $slug);


    return strtolower($slug);
}
?>
