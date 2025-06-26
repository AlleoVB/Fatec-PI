<?php

class LoginController
{
    public function login($email, $senha)
    {
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->buscarPorEmail($email);

        if ($usuario && password_verify($senha, $usuario->getSenhaHash())) {
            SessionManager::startSession();
            SessionManager::setUserSession($usuario->getId());
            header("Location: painel.php");
        } else {
            echo "Login inválido.";
        }
    }

    public function logout()
    {
        SessionManager::startSession(); // Precisa iniciar para destruir
        SessionManager::destroy();
        header("Location: index.php");
    }
}
