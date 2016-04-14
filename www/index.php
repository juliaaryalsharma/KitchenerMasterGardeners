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

$oApp->post("/login", function()use($oApp, $oDb){
    $oUser = json_decode($oApp->request->getBody());
    $oStmt = $oDb->prepare('INSERT into users(name, uname, salt, sha1, message) VALUES(:name, :uname, :salt, :pwd, :message)');
    $oStmt->bindParam("name", $oUser->name);
    $oStmt->bindParam("uname", $oUser->sUname);
    $oStmt->bindParam("salt", $oUser->sSalt);
    $oStmt->bindParam("pwd", $oUser->sSha1);
    $oStmt->bindParam("message", $oUser->message);
    $oStmt->execute();
    if($oStmt->rowCount() == 1){
        echo '{"result":"success", "name":"'. $oUser->name . '"}';
    }else{
        $oApp->halt(500, json_encode($oStmt->errorInfo()));
     }
});

$oApp->get("/currentUser", function(){
    echo json_encode($_SESSION["currentUser"]);
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

$oApp->post("/login", function()use($oApp){

});
$oApp->run();
