<?php
class Rotas
{
    private array $rotas = [];

    public function get(string $uri, array $controllerMetodo)
    {
        $this->rotas['GET'][$uri] = $controllerMetodo;
    }

    public function post(string $uri, array $controllerMetodo)
    {
        $this->rotas['POST'][$uri] = $controllerMetodo;
    }

    public function verificarRota(string $metodo, string $uri)
    {
        if (isset($this->rotas[$metodo][$uri])) {
            $dados = $this->rotas[$metodo][$uri];
            $controller = $dados[0];
            $metodoController = $dados[1];
            $obj = new $controller();
            return $obj->$metodoController();
        } else {
            http_response_code(404);
            header("location: index.php");
            /* require_once 'views/404.php'; */ // ou redirecione
        }
    }
}

$route = new Rotas();

// Público
$route->get("/", [HomeController::class, "inicio"]);
$route->post("/", [HomeController::class, "inicio"]);
$route->get("/login", [LoginController::class, "formLogin"]);
$route->post("/login", [LoginController::class, "login"]);
$route->get("/cadastro", [UsuarioController::class, "formCadastro"]);
$route->post("/cadastro", [UsuarioController::class, "cadastrar"]);

// Privado (com verificação no controller)
$route->get("/painel", [PainelController::class, "inicio"]);
$route->get("/logout", [LoginController::class, "logout"]);
