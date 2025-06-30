<?php

class HomeController
{
    public function inicio()
    {
        $erro = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['acao'] ?? "";

            if ($acao === "cadastrar") {
                
                $nome = $_POST['nome'] ?? "";
                $email = $_POST['email'] ?? "";
                $senha = $_POST['senha'] ?? "";

                switch (SignupController::validarCadastro($nome, $email, $senha)) {

                    case 'NED':
                        $erro = "Preencha todos os campos!";
                        break;

                    case 'NaE':
                        $erro = "E-mail inválido!";
                        break;

                    case 'EAE':
                        $erro = "E-mail já cadastrado!";
                        break;

                    case 'AOK':
                        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                        $usuario = new Usuario(0, $nome, $email, $senhaHash);

                        (new UsuarioDAO())->inserir($usuario);
                        $mensagem = "Cadastro realizado!";
                        break;

                    default:
                        $erro = "Falha no cadastro!";
                        break;
                }

            } elseif ($acao === "login") {
                // Lógica login
                $email = $_POST['email'] ?? "";
                $senha = $_POST['senha'] ?? "";

                if ($email && $senha) {
                    $usuario = (new UsuarioDAO())->buscarPorEmail($email);
                    if ($usuario && password_verify($senha, $usuario->getSenhaHash())) {
                        // login ok
                        $_SESSION['user_id'] = $usuario->getId();
                        header("Location: /care/painel");
                        exit;
                    } else {
                        $erro = "E-mail ou senha inválidos!";
                    }
                } else {
                    $erro = "Preencha e-mail e senha!";
                }
            }
        }

        $titulo = '';
        $style = array("assets/css/login-modal.css");
        $script = array("assets/js/loginmodal.js");
        require_once "views/head.php";
        require_once "views/home.html";
        require_once "views/foot.php";
        /* include "views/home.php"; */ // Recarrega a página, com variáveis $erro, $mensagem
    }

}
