<?php

namespace App\Core;

class Application
{
    public Router $router;
    public Request $request;
    public static string $ROOT_DIR;
    public Response $response;
    public static Application $app;
    public Controller $controller;
    public Database $db;
    public Session $session;

    public function __construct($rootPath , array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
    }

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}