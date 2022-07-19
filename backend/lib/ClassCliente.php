<?php
    require dirname(__FILE__) . "/../db.php";

class cliente 
    {
        private $nome;
        private $sobrenome;
        private $email;
        private $senha;


        function setNome($v) {$this->nome = $v;}
        function setSobrenome($v){$this->sobrenome = $v;}
        function setEmail($v){$this->email = $v;}
        function setSenha($v){$this->senha = $v;}


        function getNome(){return $this->nome;}
        function getSobremome(){return $this->sobrenome;}
        function getEmail(){return $this->email; }
        function getSenha(){return $this->senha; }


        public function inserir()
        {
            global $_DATABASE ;
            $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
            $consulta = $db->prepare("INSERT INTO cliente(nome, sobrenome, email,senha) VALUES(:nome,:sobrenome,:email,:senha)");
            $consulta->execute
            ([
                ':nome' => $this->nome,
                ':sobrenome' => $this->sobrenome,
                ':email' => $this->email,
                ':senha' => $this->senha
            ]);

        }

        public function procurar($nome, $senha)
        {
            global $_DATABASE ;
            $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
            $consulta = $db->query("SELECT COUNT(*) FROM `cliente` WHERE nome = '$nome' and senha ='$senha'");
            return $consulta->fetchColumn();
        }
    }




?>