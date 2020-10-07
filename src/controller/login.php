<?php

loadModel('login');
$exception = null;

if(count($_POST)>0){
    // Verifica se foi feito um post e cria um array com chave e valores
    $login = new Login($_POST);
  
    try {
        $user = $login->checkLogin();
        // echo "Usuario {$user->name} logado.";
        header("Location: day_records.php");
    } catch (AppException $e) {
        $exception = $e;
    }
}

loadView('login', $_POST + ['exception'=>$exception]);