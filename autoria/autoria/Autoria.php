<?php

include_once '../Conectar.php';

class Autoria
{
    private $cod_autor;
    private $cod_livro;
    private $data_lancamento;
    private $editora;
    private $conn;

    
    public function getCodAutor() {
        return $this->cod_autor;
    }
    
    public function setCodAutor($cod_autor) { 
        $this->cod_autor= $cod_autor;
    }

    public function getCodLivro() {
        return $this->cod_livro;
    }
    
    public function setCodLivro($cod_livro) { 
        $this->cod_livro= $cod_livro;
    }

    public function getDataLancamento() { 
        return $this->data_lancamento;
    }
    
    public function setDataLancamento($data_lancamento) { 
        $this->data_lancamento= $data_lancamento;
    }
    
    public function getEditora() { 
        return $this->editora;
    }

    public function setEditora($editora) { 
        $this->editora= $editora;
    }


    function salvar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into autoria values (?, ?, ?, ?)"); 
            @$sql-> bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCodLivro(), PDO::PARAM_STR); 
            @$sql-> bindParam(3, $this->getDataLancamento(), PDO::PARAM_STR); 
            @$sql-> bindParam(4, $this->getEditora(), PDO::PARAM_STR); 

            if ($sql->execute() == 1)
                return "Registro salvo com sucesso!";

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
            $sql = $this->conn->prepare("select * from autoria where cod_autor = ?"); 
            @$sql-> bindParam(1, $this->getCodAutor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao executar a consulta. " . $exc->getMessage();
        }
    }

    function consultar2()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autoria where cod_livro = ?"); 
            @$sql-> bindParam(1, $this->getCodLivro(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao executar a consulta. " . $exc->getMessage();
        }
    }
    
    function alterar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update autoria set cod_livro = ?"); 
            @$sql-> bindParam(1, $this->getCodLivro(), PDO::PARAM_STR);

            if ($sql->execute() == 1)
                return "Registro alterado com sucesso!";

            $this->conn = null;
        }
        catch (PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }
    
    function exclusao()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from autoria where cod_autor = ?"); 
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
            $sql = $this->conn->prepare("select * from autoria order by editora"); 
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
