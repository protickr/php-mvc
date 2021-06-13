<?php


namespace mvc;


class Router
{

    private array $routeMap;
    public Request $request;
    public Response $response;

    /**
     * Route constructor.
     */
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($route, $callBack){
        $this->routeMap["get"][$route] = $callBack;
    }

    public function post($route, $callBack){
        $this->routeMap["post"][$route] = $callBack;
    }

    public function resolveActionFromUrl(){
        $url = $this->request->url();
        $callback = $this->routeMap[$this->request->method()][$url] ?? false;

        if(!$callback){
            echo "Route not Found"; //TODO: implement a not found view
        }else{
            $controller = new $callback[0]();
            $controller->action = $callback[1];
            $callback[0] = $controller;

            //call controller function
            call_user_func($callback, $this->request, $this->response);

        }
    }
}