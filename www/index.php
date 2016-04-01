<?php
require __DIR__ . "/../vendor/autoload.php";
//connect to database
$oDb = new PDO("sqlite:" . __DIR__ . "/../gardener.sqlite");
$oApp = new \Slim\Slim(array(
        'view' => new \PHPView\PHPView(),
        'templates.path' => __DIR__ . "/../views" ));

$oApp->get("/", function()use($oApp){
    $oApp->render("index.phtml");
});

$oApp->get("/:page", function($sPage)use($oApp){
    $oApp->render($sPage . ".phtml");
});

$oApp->get("/salt/:uname", function($sUname)use($oApp, $oDb){
    $oStmt = $oDb->prepare("SELECT salt FROM users WHERE uname = :uname");
    $oStmt->bindParam("uname", $sUname);
    $oStmt->execute();
    $aUser = $oStmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($aUser[0]);
});

$oApp->run();
