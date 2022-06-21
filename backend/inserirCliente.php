<?php
require "lib/classCliente.php";

try{
    $c = new Cliente;
    $c-> setNome($_POST['nome']); 
    $c-> setSobrenome($_POST['sobrenome']);
    $c-> setEmail($_POST['email']);
    $c-> setSenha($_POST['senha']);
    $c->inserir();
    $a = $c->getNome();
    
    
}catch( PDOException $e){
    throw new Exception("Error Processing Request", $e);
    
}


?>