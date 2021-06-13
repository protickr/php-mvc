<?php


namespace controller;


use mvc\Controller;
use mvc\Request;
use mvc\Response;

class ReportController extends Controller
{
    public function index(Request $request, Response $response){
        echo "hello from controller";
    }

}