<?php

class PainelController
{
    public function inicio()
    {
        $titulo = '';
        $style = array("assets/css/userpage.css");
        $script = array();
        require_once "views/head.php";
        require_once "views/painel.php";
        require_once "views/foot.php";
    }
}
