<?php
require __DIR__ . "/../vendor/autoload.php";
//connect to database
$oDb = new PDO("sqlite:" . __DIR__ . "/../KmgDb.sqlite");
$oApp = new \Slim\Slim(array(
        'view' => new \PHPView\PHPView(),
        'templates.path' => __DIR__ . "/../views" ));

$oApp->get("/", function()use($oApp){
    $oApp->render("index.phtml");
});

$oApp->get("/:page", function($sPage)use($oApp){
    $oApp->render($sPage . ".phtml");
});

$oApp->run();
