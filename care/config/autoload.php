<?php

//autoload das classes
spl_autoload_register(function ($uri) {
    if (file_exists("controllers/" . $uri . ".class.php")) {
        require_once "controllers/" . $uri . ".class.php";
    } elseif (file_exists("models/" . $uri . ".class.php")) {
        require_once "models/" . $uri . ".class.php";
    } else {
        echo "Classe não encontrada";
    }
});
