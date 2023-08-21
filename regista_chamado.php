<?php
    session_start();
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $texto = $_SESSION['id'].'#'.implode('#',str_replace('#','-',$_POST)) . PHP_EOL;
    
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);
    header('Location: abrir_chamado.php');
?>