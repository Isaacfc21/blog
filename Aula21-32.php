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

    // include_once "sistema/configuracao.php";
    // include_once "helpers.php";

    
    // $data = date('d/m/Y H:i:s');
    // echo $data;

    //Conteúdo
?>
<?php
    //Aula 027

    // include_once "sistema/configuracao.php";
    // include_once "helpers.php";

    
    // echo (contarTempo('2020-03-19 20:31:36'));

    //Conteúdo
?>
<?php
    //Aula 028

    # require_once "sistema/configuracao.php";
    # include_once "helpers.php";

    // if(validarEmail('teste@gmail.com')){
    //     echo 'Endereço de e-mail válido';
    // }else{
    //     echo 'E-mail inválido';
    // }
    # var_dump(validarURL('http://teste.com'))
    # var_dump(validarEmail('teste@gmail.com'));

    //Conteúdo
?>
<?php
    //Aula 029

    /*
    require_once "sistema/configuracao.php";
    include_once "helpers.php";

    $url = 'https://unset.com';
    var_dump(validarURL($url));
    echo '<hr>';
    var_dump(validarURLComFiltro($url));
    */

    //Conteúdo
?>
<?php
    //Aula 030

    require_once "sistema/configuracao.php";
    include_once "helpers.php";

    echo SITE_NOME;
    echo '<hr>';
    echo SITE_DESCRICAO; 

    // if(true){
    //     // define('SITE_NOME','Isaac'); // Posso usar em estruturas condicionais
    //     // echo SITE_NOME; // Não posso usar em estruturas condicionais
    // }
   
    // echo constant ('SITE_NOME');
    //Conteúdo
?>