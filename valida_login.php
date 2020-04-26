<?php

session_start();

$usuario_autenticado = false;

$usuario_app = array(
    array('email' => 'cleu.junior@gmail.com', 'senha' => '1234'),
    array('email' => 'fernando@teste.com.br', 'senha' => '1234')


);


foreach ($usuario_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;

    } 

    if($usuario_autenticado){
        echo "Usuario Logado";
        $_SESSION['autenticado'] = 'SIM';
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');

    }
    
    echo "<hr>";
}

