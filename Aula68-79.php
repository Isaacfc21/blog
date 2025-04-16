<?php
    //Aula 068 e 069

    require 'vendor/autoload.php';
    // require 'rotas.php';
    use sistema\Modelo\PostModelo;

    $posts = (new PostModelo())->ler();

    foreach ($posts as $post){
        echo $post->titulo . "<br>";
    }

    //Conteúdo
?>