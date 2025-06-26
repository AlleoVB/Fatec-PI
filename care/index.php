<?php
require_once "rotas.php";
require_once "config/autoload.php";
require_once "controllers/SessionManager.class.php";

// Inicia a sessão de forma segura
SessionManager::startSession();

// Recupera a URI limpa
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Ajuste conforme subpasta
$uri = substr($uri, strpos($uri, "care") + 4);
/* $baseDir = "/seuProjetoPublic"; // ou "", se não estiver em subpasta
$uri = str_replace($baseDir, "", $uri); */

// Roteia
$route->verificarRota($_SERVER['REQUEST_METHOD'], $uri);
