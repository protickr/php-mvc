<?php
    use mvc\Application;
    use controller\ReportController;

    require_once __DIR__."/autoload.php";

    $dbConfig = [
        "dsn" => "mysql:",
        "username" => "root",
        "password" => ""
    ];

    // application instance
    $app = new Application($dbConfig);

    // set routes for application
    $app->router->get("/", [ReportController::class, "index"]);

    // run application
    $app->run();
