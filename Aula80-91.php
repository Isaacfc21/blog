<?php
    //Aula 080-089

    // require 'vendor/autoload.php';
    // require 'rotas.php';
    //Conteúdo
?>
<?php
    //Aula 090

    // require 'vendor/autoload.php';
    // // require 'rotas.php';

    // session_start();
    // echo session_id();
    // echo '<hr>';

    // $_SESSION['nome'] = 'Isaac Caraça';
    // // $_SESSION['visitas'] = 0;

    // if (isset($_SESSION['visitas'])) {
    //     $_SESSION['visitas']++;
    // } else {
    //     $_SESSION['visitas'] = 1;
    // }
    // // unset($_SESSION['visitas']);
    // session_destroy();

    
    // echo ($_SESSION['visitas'] == 1 ? 
    //     "{$_SESSION['nome']} visitou {$_SESSION['visitas']} vez esta página.<br>" : 
    //     "{$_SESSION['nome']} visitou {$_SESSION['visitas']} vezes esta página.<br>");

    //Conteúdo
?>
<?php
    //Aula 091

    require 'vendor/autoload.php';
    // require 'rotas.php';
    $sessao = new sistema\Nucleo\Sessao();

    // $sessao->criar('usuario', [
    //     'id' => 10,
    //     'nome' => 'Isaac Caraça'
    // ]);

    // $sessao->criar('nome', 'Isaac Caraça');

    var_dump($sessao->carregar());
    echo '<hr>';
    // var_dump($sessao->carregar()->usuario->id);
    // echo '<hr>';
    // var_dump($sessao->carregar()->usuario->nome);
    // echo '<hr>';
    var_dump($sessao->checar('nome'));
    // echo '<hr>';
    // $sessao->limpar('usuario');
    echo '<hr>';
    $sessao->deletar();
    // var_dump($sessao->checar('usuario'));
    //Conteúdo
?>