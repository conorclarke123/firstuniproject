<?php
             //override server settings to turn error display back on
            //server configuration settings can be seen using phpinfo function (week4 Lab3 exercise 4)
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>

<?php
        $host = "cclarke49.web.eeecs.qub.ac.uk";
        $user = "cclarke49";
        $pw = "mxR4l5tjFd2CQmHj";
        $db = "cclarke49";
 
        $conn = new mysqli($host, $user, $pw, $db);
 
        if($conn->connect_error) {
          echo $conn->connect_error;
        }
 