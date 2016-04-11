<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
//connect to database
$oDb = new PDO("sqlite:" . __DIR__ . "/../gardener.sqlite");
$oApp = new \Slim\Slim(array(
        'view' => new \PHPView\PHPView(),
        'templates.path' => __DIR__ . "/../views" ));

$oApp->get("/", function()use($oApp){
    $oApp->render("index.phtml");
});

$oApp->get("/logout", function()use($oApp){
    unset($_SESSION["currentUser"]);
    $oApp->redirect("/index");
});

$oApp->get("/:page", function($sPage)use($oApp){
    $oApp->render($sPage . ".phtml");
});

$oApp->get("/salt/:uname", function($sUname)use($oApp, $oDb){
    $oStmt = $oDb->prepare('SELECT salt FROM users WHERE uname = :uname AND bPending = "false"');
    $oStmt->bindParam("uname", $sUname);
    $oStmt->execute();
    $aUser = $oStmt->fetchAll(PDO::FETCH_OBJ);
    if(count($aUser) > 0){
        echo json_encode($aUser[0]);    
    }else{
        $oApp->halt(403, "no such user");
    }
    
});

$oApp->get("/checklogin/:uname/:sha1", function($sUname, $sSha1)use($oApp, $oDb){
    $oStmt = $oDb->prepare('SELECT * FROM users WHERE uname = :uname and sha1 = :sha1 AND bPending = "false"');
    $oStmt->bindParam("uname", $sUname);
    $oStmt->bindParam("sha1", $sSha1);
    $oStmt->execute();
    $aUser = $oStmt->fetchAll(PDO::FETCH_OBJ);
    if(count($aUser) > 0){
        $_SESSION["currentUser"] = $aUser[0];
        echo json_encode(array("name"=>$aUser[0]->name));
    }else{
        $oApp->halt(403, "no such user");
    }
    
});
$oApp->run();
