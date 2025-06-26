<?php

class HomeController
{
    public function inicio()
    {
        $titulo = '';
        $style = array("assets/css/login-modal.css");
        $script = array("assets/js/loginmodal.js");
        require_once "views/head.php";
        require_once "views/index.html";
        require_once "views/foot.php";
    }
}
