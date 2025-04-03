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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
    //Aula 038 a 041

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';
    // include_once 'sistema/Nucleo/Mensagem.php';
    
    // $msg = new Mensagem();
    // echo $msg->sucesso('Mensagem de sucesso')->renderizar();
    // echo $msg->erro('Mensagem de erro')->renderizar();
    // echo $msg->alerta('Mensagem de alerta')->renderizar();
    // echo $msg->informa('Mensagem de informação')->renderizar();
    // echo '<hr>';
    // var_dump($msg);
    
    //Conteúdo
?>
<?php
    //Aula 042

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';
    // include_once 'sistema/Nucleo/Mensagem.php';
    
    // // $msg = new Mensagem();
    // // echo $msg->sucesso('Mensagem de sucesso')->renderizar();
    // // echo (new Mensagem())->erro("Mensagem de Erro")->renderizar();

    // echo(new Mensagem())->sucesso("Mensagem de sucesso");
    // echo '<hr>'; 
    
    //Conteúdo
?>
<?php
    //Aula 043

    // require_once 'sistema/configuracao.php';
    // include_once 'helpers2.php';
    // include_once 'sistema/Nucleo/Mensagem.php';

    // use sistema\Nucleo\Mensagem as msg;

    // // echo(new \sistema\Nucleo\Mensagem())->sucesso("Mensagem de sucesso");
    // echo(new msg)->sucesso("Mensagem de sucesso");
    // echo '<hr>'; 
    
    //Conteúdo
?>
<?php
    //Aula 044

    require_once 'sistema/configuracao.php';
    include_once 'sistema/Nucleo/helpers2.php';
    include_once 'sistema/Nucleo/class_helpers.php';
    include_once 'sistema/Nucleo/Mensagem.php';

    use sistema\Nucleo\Helpers;  

    echo Helpers::limparNumero('122343413434sdf');

    // $helper = new Helpers();
    // $helper->validarCPF('56256446836');

    echo '<hr>'; 
    
    //Conteúdo
?>