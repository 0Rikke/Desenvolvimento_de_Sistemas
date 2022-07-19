<?php

require dirname(__FILE__) . "/../db.php";

class Livro
    {
        private $nome;
        private $autor;
        private $editora;
        private $publicacao;
    
        function setNome($v) {$this->nome = $v;}
        function setAutor($v){$this->autor = $v;}
        function setEditora($v){$this->editora = $v;}
        function setPublicacao($v){$this->publicacao = $v;}

        function getNome(){return $this->nome;}
        function getAutor(){return $this->autor;}
        function getEditora(){return $this->editora;}
        function getPublicacao(){return $this->publicacao;}

        public function listar()
        {
            global $_DATABASE ;
            $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
            $consulta = $db->query("SELECT * FROM `livros`;");
            
            return $consulta->fetchObject();
        }
     
    
    
    
    }








?>