<?php

include_once '../../Conectar.php';

class Livro
{
    private $cod_livro;
    private $titulo;
    private $categoria;
    private $isbn;
    private $idioma;
    private $qtde_pag;
    private $conn;

    
    public function getCodLivro() {
        return $this->cod_livro;
    }
    
    public function setCodLivro($cod_livro) { 
        $this->cod_livro = $cod_livro;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) { 
        $this->titulo = $titulo;
    }

    public function getCategoria() {
        return $this->categoria;
    }
    
    public function setCategoria($categoria) { 
        $this->categoria = $categoria;
    }

    public function getIsbn() {
        return $this->isbn;
    }
    
    public function setIsbn($isbn) { 
        $this->isbn = $isbn;
    }

    public function getIdioma() {
        return $this->idioma;
    }
    
    public function setIdioma($idioma) { 
        $this->idioma = $idioma;
    }

    public function getQtdePag() {
        return $this->qtde_pag;
    }
    
    public function setQtdePag($qtde_pag) { 
        $this->qtde_pag = $qtde_pag;
    }


    function salvar()
    {
        try
        {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into livro values (null, ?, ?, ?, ?, ?)"); 
            @$sql-> bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCategoria(), PDO::PARAM_STR); 
            @$sql-> bindParam(3, $this->getIsbn(), PDO::PARAM_STR); 
            @$sql-> bindParam(4, $this->getIdioma(), PDO::PARAM_STR); 
            @$sql-> bindParam(5, $this->getQtdePag(), PDO::PARAM_STR); 

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
            $sql = $this->conn->prepare("select * from livro where cod_livro = ?"); 
            @$sql-> bindParam(1, $this->getCodLivro(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("update livro set titulo = ?, categoria = ? where cod_livro = ?"); 
            @$sql-> bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCategoria(), PDO::PARAM_STR); 
            @$sql-> bindParam(3, $this->getCodLivro(), PDO::PARAM_STR);

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
            $sql = $this->conn->prepare("select * from livro where titulo like ?"); 
            @$sql-> bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("delete from livro where cod_livro = ?"); 
            @$sql-> bindParam(1, $this->getCodLivro(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from livro order by cod_livro"); 
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