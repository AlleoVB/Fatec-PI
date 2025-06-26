<?php
class SobreNosController
{
    public function inicio()
    {
        $titulo = ' - Sobre Nós';
        $style = array("assets/css/styleSobreNos.css");
        $script = array();

        require_once "views/head.php";
        require_once "views/sobreNos.html";
        require_once "views/foot.php";
    }
}

