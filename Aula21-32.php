<?php
    //Aula 021 

    /*
        include_once "helpers.php";
        $texto = '<h1>texto</h1> <p>para</p> resumir';
        */

    # echo resumirTexto($texto, 50);

    //Conteúdo
?>
<?php
    //Aula 025  

    # include_once "helpers.php";
    # echo 'R$' . ' ' . (formatarNumero(50));
    // var_dump($valor);    
    /*
        if($valor){
            echo $valor;
        }else{
            echo 0;
        }
        */

    // echo($valor ? $valor : 0);

    //Conteúdo
?>
<?php
    //Aula 026  

    include_once "sistema/configuracao.php";
    include_once "helpers.php";

    
    $data = date('d/m/Y H:i:s');
    echo $data;
?>