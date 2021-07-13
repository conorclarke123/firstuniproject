<?php
session_start();
include("../conn.php");

$uname = $_POST["userfield"];

$pass = $_POST["passfield"];

$checkuser = "SELECT * FROM BigFestBelfastAdmin WHERE user='$uname' AND pword='$pass' ";

$userresult = $conn->query($checkuser);

if(!$userresult){
    echo $conn-> error;
}

$returnedrows=$userresult->num_rows;

if($returnedrows > 0){
    
    $_SESSION['Manager_40228221'] = $uname;
    
    header("Location: managerhome.php");
} else {
    header("Location: managerlogin.php");
}

?>