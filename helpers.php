<?php
#echo("Arquivo de Funções");

/**
 * Formata valores
 * @param float $valor valor para formatar
 * @return string valor formatado
 */

function formatarValor(float $valor): string
{
    return number_format($valor, 2, ',', '.');
}

/**
 * Formata numeros
 * @param int $numero numero para formatar
 * @return string numero formatado
 */

function formatarNumero(int $numero): string
{
    return number_format($numero ?: 0,0,'.','.');
}

/**
 * Saudação de acordo com o horário
 * @return string saudação
 */

function saudacao(): string
{
    echo $hora = date('H');

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = "Boa madrugada";
    } else if ($hora >= 6 and $hora <= 12) {
        $saudacao = "Bom dia";
    } else if ($hora >= 13 and $hora <= 18) {
        $saudacao = "Boa tarde";
    } else {
        $saudacao = "Boa noite";
    }

    return $saudacao;
};

/**
 * Resume um Texto
 * 
 * @param string $texto texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - o que deve ser exibido ao final do resumo
 * @return  string texto resumido
 */

function resumirTexto(string $texto, int $limite, string $continue = "..."): string
{
    $textoLimpo = trim(strip_tags($texto));

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ""));

    return $resumirTexto . $continue;
};
