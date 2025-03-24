<?php
    #echo("Arquivo de Funções");

function slug(string $string): string
{
    // Usar iconv para remover acentos e caracteres especiais
    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    
    // Remover caracteres especiais (aqueles não alfanuméricos, incluindo pontuação e símbolos)
    $slug = preg_replace('/[^a-zA-Z0-9\s]/', '', $slug);

    return $slug;
}
?>
