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
    
    public static function validarCadastro($nome, $email, $senha): ?string
    {
        if (!$nome || !$email || !$senha) {
            return 'NED'; //Not Enough Data
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'NaE'; //Not a Email
        }

        if ((new UsuarioDAO())->buscarPorEmail($email)) {
            return 'EAE'; //Email Already Exists
        }

        return 'AOK'; // tudo ok
    }
    public function logout()
    {
        SessionManager::startSession(); // Precisa iniciar para destruir
        SessionManager::destroy();
        header("Location: index.php");
    }
}
