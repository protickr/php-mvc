<?php


namespace mvc;

use mvc\database\Database;
use mvc\Router;


class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;

    /**
     * Application constructor.
     */
    public function __construct($dbConfig = [])
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($dbConfig);
    }

    public function run(){
        $this->router->resolveActionFromUrl();
    }
}