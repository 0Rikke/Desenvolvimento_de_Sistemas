<?php
require "lib/classLivro.php";

try{
   
   
    $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
    $livros = [];
    foreach ($db->query("
        SELECT *
        FROM livros
        ") as $livro){
        $livros[] = [
            "id" => $livro['id'],
            "nome" => $livro['nome'],
            "sobrenome" => $livro['autor'],
            "dtnasc" => $livro['editora'],
            "publicacao" => $livro['publicacao']
        ];
    }
   
    print json_encode($livros);
}catch( PDOException $e){
    throw new Exception("Error Processing Request". $e);
    
}


?>