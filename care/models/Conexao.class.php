<?php

class Conexao
{

    public function __construct(protected $db = null)
    {

        $host = "localhost";
        $dbname = "caredata";
        $dsn = "mysql:host=$host;dbname=$dbname";
        $dbusername = "root";
        $dbpassword = "";

        try {
            $this->db = new PDO($dsn, $dbusername, $dbpassword); // Parametros, Usuario, Senha
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Código: " . $e->getCode();
            echo "Mensagem: " . $e->getMessage();
            die();
        }
    }
}
