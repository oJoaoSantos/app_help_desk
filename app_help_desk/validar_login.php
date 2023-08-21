<?php
    session_start();

    $userLogged = false;
    $userId = null;
    $userPerfil = null;
    $perfis = Array( 1 => 'Administrativo', 2 => 'Comum');

    $utilizadoresApp = [
        ['id' => 1, 'email' => 'admin1@teste.pt', 'senha' => '123', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'admin2@teste.pt', 'senha' => '123', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'user1@teste.pt', 'senha' => '123', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'user2@teste.pt', 'senha' => '123', 'perfil_id' => 2],

    ];

    foreach($utilizadoresApp as $user){
        if ($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']) {
            $userLogged = true;
            $userId = $user['id'];
            $userPerfil = $user['perfil_id'];
            break;
        }
    }
    if ($userLogged) {
        echo'OK';
        $_SESSION['logged'] = 'sim';
        $_SESSION['id'] = $userId;
        $_SESSION['perfil'] = $userPerfil;
        header('location: home.php');
    } else {
        header('location: index.php?login=erro');
        $_SESSION['logged'] = 'nao';
    }
?>