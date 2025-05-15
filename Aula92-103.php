<?php
    //Aula 092-094

    // require 'vendor/autoload.php';
    // require 'rotas.php';

    //Conteúdo
?>


<?php
    //Aula 095

    // require 'vendor/autoload.php';
    // // require 'rotas.php';

    // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    // var_dump($dados);
    // echo '<hr>';

    // $colunas = implode(', ', array_keys($dados));
    // var_dump($colunas);
    // echo '<hr>';

    // $valores = ':'.implode(', :', array_keys($dados));
    // var_dump($valores);
    // echo '<hr>';

    // $query  = 'INSERT INTO `posts` ('.$colunas.') VALUES ('.$valores.');';
    // var_dump($query);
    // echo '<hr>';

    //Conteúdo
?>
<!-- INSERT INTO `categorias` (`id`, `titulo`, `texto`, `status`) VALUES (NULL, 'teste', 'teste', '1'); -->
<?php
    //Aula 096

    // require 'vendor/autoload.php';
    // // require 'rotas.php';

    // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    // var_dump($dados);
    // echo '<hr>';

    // // $colunas = implode(', ', array_keys($dados));
    // // var_dump($colunas);
    // // echo '<hr>';

    // // $valores = ':'.implode(', :', array_keys($dados));
    // // var_dump($valores);
    // // echo '<hr>';

    // $set = [];

    // foreach($dados as $chave => $valor){
    //     $set[] = "{$chave} = :{$valor}";
    //     var_dump($set);
    //     echo '<hr>';
    // }

    // $set = implode(", ", $set);
    // var_dump($set);
    // echo '<hr>';
    // $query  = "UPDATE `categorias` SET ($set) WHERE id = 7;";
    // var_dump($query); 

    // $query  = 'INSERT INTO `posts` ('.$colunas.') VALUES ('.$valores.');';
    // var_dump($query);
    // echo '<hr>';

    //Conteúdo
?>
<?php
    //Aula 097-099

    require 'vendor/autoload.php';
    require 'rotas.php';

    //Conteúdo
?>
<!-- UPDATE `categorias` SET `titulo`='teste 2',`texto`='teste 2',`texto`='[value-3]',`status`='1' WHERE id = 7
<hr>
<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="text" name="idade">
    <input type="submit">
</form> -->