<?php

class SignupController
{
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

}
