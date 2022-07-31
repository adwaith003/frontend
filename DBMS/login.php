<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")

    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM `admin` WHERE Username = '$name'";
        
        if(!empty($name) && !empty($pass)) {  
            $result = mysqli_query($conn, $sql);
            $result_arr = mysqli_fetch_array($result);
            $login_name = $result_arr["Username"];
            $login_pass = $result_arr["Password"];
              if(strcmp($login_pass,$pass)==0) {
                
                     header("location: /DBMS/Home.html"); 
               
            }
            else {
                
                
            }
        }
    }
?>