<?php

require dirname(__FILE__) . "/../db.php";

class Livro
{
    private $nome;
    private $autor;
    private $editora;
    private $publicacao;

    function setNome($v)
    {
        $this->nome = $v;
    }
    function setAutor($v)
    {
        $this->autor = $v;
    }
    function setEditora($v)
    {
        $this->editora = $v;
    }
    function setPublicacao($v)
    {
        $this->publicacao = $v;
    }

    function getNome()
    {
        return $this->nome;
    }
    function getAutor()
    {
        return $this->autor;
    }
    function getEditora()
    {
        return $this->editora;
    }
    function getPublicacao()
    {
        return $this->publicacao;
    }

    public function listar()
    {
        global $_DATABASE;
        $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
        $consulta = $db->query("SELECT * FROM `livros`;");

        return $consulta->fetchObject();
    }

    function buscar()
    {
        try {

            global $_DATABASE;
            $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
            $livros = [];
            foreach ($db->query("
                SELECT *
                FROM livros
                ") as $livro) {
                $livros[] = [
                    "id" => $livro['id'],
                    "nome" => $livro['nome'],
                    "sobrenome" => $livro['autor'],
                    "dtnasc" => $livro['editora'],
                    "publicacao" => $livro['publicacao']
                ];
            }

            return $livros;
        } catch (PDOException $e) {
            throw new Exception("Error Processing Request" . $e);
        }
    }

    function buscarPorId($id){
        try {

            global $_DATABASE;
            $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
 
            $consulta = $db->prepare("SELECT * FROM livros WHERE id=:id");
            $consulta->execute([':id' => $id]);
            $consulta->setFetchMode(PDO::FETCH_CLASS, 'Livro');
            return $consulta->fetch();

        } catch (PDOException $e) {
            throw new Exception("Error Processing Request" . $e);
        }
    }
}
