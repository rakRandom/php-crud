<?php

include_once '../../Conectar.php';

class Autor
{
    private $cod_autor;
    private $nome_autor;
    private $sobrenome;
    private $email;
    private $nasc;
    private $conn;

    
    public function getCodAutor() {
        return $this->cod_autor;
    }
    
    public function setCodAutor($cod_autor) { 
        $this->cod_autor= $cod_autor;
    }
    
    public function getNomeAutor() { 
        return $this->nome_autor;
    }
    
    public function setNomeAutor($nome_autor) { 
        $this->nome_autor= $nome_autor;
    
    }
    public function getSobrenome() { 
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) { 
        $this->sobrenome= $sobrenome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getNasc() {
        return $this->nasc;
    }

    public function setNasc($nasc) {
        $this->nasc = $nasc;
    }


    function salvar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into autor values (null, ?, ?, ?, ?)"); 
            @$sql-> bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSobrenome(), PDO::PARAM_STR); 
            @$sql-> bindParam(3, $this->getEmail(), PDO::PARAM_STR); 
            @$sql-> bindParam(4, $this->getNasc(), PDO::PARAM_STR); 

            if ($sql->execute() == 1)
                return "Registro salvo com sucesso!";

            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor where cod_autor = ?"); 
            @$sql-> bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterar2()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update autor set nome_autor = ?, sobrenome = ? where cod_autor = ?"); 
            @$sql-> bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSobrenome(), PDO::PARAM_STR); 
            @$sql-> bindParam(3, $this->getCodAutor(), PDO::PARAM_STR);

            if ($sql->execute() == 1)
                return "Registro alterado com sucesso!";

            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }
    
    function consultar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor where nome_autor like ?"); 
            @$sql-> bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao executar a consulta. " . $exc->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from autor where cod_autor = ?"); 
            @$sql-> bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
            if ($sql->execute() == 1)
                return "Excluido com sucesso!";
            else
                return "Erro na exclusão";
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }

    function listar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor order by cod_autor"); 
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao executar a consulta. " . $exc->getMessage();
        }
    }
}

?>
