<?php
    //Aula 033

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';

    // echo slug("      Adão \"Negro\" - '2022'    "). '<hr>';
    // echo slug("Avatar          2: O Caminho da Água"). '<hr>';
    // echo slug("Não! Não   olhe!"). '<hr>';
    // echo slug("Sonic 2 - O   Filme"). '<hr>';
    // echo slug("NOVA SÉRIE   NO DISNEY          +!"). '<hr>';
    // echo slug("100 Melhores   filmes"). '<hr>';
    // echo slug("teste   !@###$%6'%%',*.:/?/"). '<hr>';

    //Conteúdo
?>
<?php
    //Aula 034

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';

    // echo saudacao();

    //Conteúdo
?>
<?php
    //Aula 035

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';

    // echo saudacao_match();

    //Conteúdo
?>
<?php
    //Aula 036

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';

    // $numero = 5;

    // // while ($numero <= 10){
    // //     echo $numero++;
    // // }

    // for($i = 1; $i <=10; $i++){
    //     // echo ($i % 2 ? $i.' impar' : $i.' par').'<br>';
    //     echo $numero.' x '.$i.' = '.$numero*$i.'<br>'; 
    // }

    //Conteúdo
?>
<?php
    //Aula 037

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';

    // $cpf = '562.564.468-36';

    // // echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf);
    // var_dump(validarCPF($cpf));
    
    //Conteúdo
?>
<?php
    //Aula 038 e 039 e 040

    require_once 'sistema/configuracao.php';
    include_once 'helpers2.php';
    include_once 'sistema/Nucleo/Mensagem.php';

    $msg = new Mensagem();
    echo $msg->renderizar();
    echo '<hr>';
    var_dump($msg);
    
    //Conteúdo
?>