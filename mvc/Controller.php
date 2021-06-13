<?php


namespace mvc;


class Controller
{
    public string $action;

    public function __construct()
    {
        echo "hello here";
    }

    public function render($view, $params = []): string
    {
        return "some view rendering";
    }
}