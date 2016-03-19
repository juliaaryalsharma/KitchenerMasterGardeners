<?php

$host="localhost"; // Host name
$username=""; // username
$password=""; //  password
$db_name="KmgDb"; // Database name
$tbl_name="Members"; // Table name

// Connect to server and select databse.
//$connection.sqlite("$host", "$username", "$password")or die("cannot connect");
//$connection.sqlite("$KmgDb")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
//$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
//$result=mysql_query($sql);

$oDb = new PDO("sqlite:" . __DIR__ . "/../KmgDb.sqlite");

// Mysql_num_row is counting table row
//$count=sqlite_num_rows($result);

//CRUD

$oApp = new \Slim\Slim(array(
        'view' => new \PHPView\PHPView(),
        'templates.path' => __DIR__ . "/../views" ));

$oApp->get("/", function(){
    renderMembers(1);
});



// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>
