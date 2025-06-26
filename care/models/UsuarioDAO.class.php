<?php

class UsuarioDAO extends Conexao {

    public function inserir(Usuario $usuario) {
        $sql = "INSERT INTO usuarios (nome, email, senhaHash, isAdmin) VALUES (:nome, :email, :senhaHash, :isAdmin)";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(':nome', $usuario->getNome());
            $stm->bindValue(':email', $usuario->getEmail());
            $stm->bindValue(':senhaHash', $usuario->getSenhaHash());
            $stm->bindValue(':isAdmin', $usuario->getIsAdmin(), PDO::PARAM_BOOL);
            $stm->execute();
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            die("Erro ao inserir usuario: " . $e->getMessage());
        }
    }

    public function buscarPorEmail(string $email): ?Usuario {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(':email', $email);
            $stm->execute();
            $dados = $stm->fetch(PDO::FETCH_OBJ);
            if ($dados) {
                return new Usuario(
                    $dados->id, $dados->nome, $dados->email,
                    $dados->senhaHash, $dados->isAdmin, $dados->criacaoConta
                );
            }
            return null;
        } catch (PDOException $e) {
            die("Erro ao buscar usuario: " . $e->getMessage());
        }
    }
}
