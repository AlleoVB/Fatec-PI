<?php

class SignupController
{
    public function signup($username, $email, $senha)
    {

        $usuarioData = new Usuario(0, $username, $email, $senha);
        $usuarioRegistroDAO = new UsuarioDAO();
        $registrado = $usuarioRegistroDAO->buscarPorEmail($email);
        

        if (!$registrado) {
            $usuarioRegistroDAO->inserir($usuarioData);
            header("Location: painel.php");
        } else {
            echo "Login inválido.";
        }
    }
}
