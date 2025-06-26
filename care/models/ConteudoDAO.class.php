<?php

class ConteudoDAO extends Conexao
{
    public function listarPorTipoEPeriodo(string $tipo, string $periodico)
    {
        $sql = "SELECT * FROM Conteudo WHERE tipo = :tipo AND periodico = :periodico ORDER BY dataCriacao DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(':tipo', $tipo);
            $stm->bindValue(':periodico', $periodico);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar conteudo: " . $e->getMessage());
        }
    }


    public function getDicaDoDia(): ?Conteudo
    {
        $sql = "SELECT * FROM conteudo WHERE tipo = dica ORDER BY dataCriacao DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar conteudo: " . $e->getMessage());
        }
    }
    public function getReflexao(): ?Conteudo
    {
        $sql = "SELECT * FROM conteudo WHERE tipo = reflexao ORDER BY dataCriacao DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar conteudo: " . $e->getMessage());
        }
    }
    public function getDesafioDoDia(): ?Conteudo
    {
        $sql = "SELECT * FROM conteudo WHERE tipo = desafio AND periodico = diario ORDER BY dataCriacao DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar conteudo: " . $e->getMessage());
        }
    }

    public function getDesafioDaSemana(): ?Conteudo
    {
        $sql = "SELECT * FROM conteudo WHERE tipo = desafio AND periodico = semana ORDER BY dataCriacao DESC LIMIT 1";
        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar conteudo: " . $e->getMessage());
        }
    }


}