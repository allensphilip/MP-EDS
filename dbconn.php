<?php

    $servername= 'localhost';
    $username= 'root';
    $password= '';
    $dbname= 'mp_eds';

    $con= mysqli_connect($servername, $username, $password, $dbname);

    function console_log($msg) {
        echo '<script>' .
          'console.log("'.$msg .' ")</script>';
    }


    if(!$con){
        
        console_log("Connection Failed");


    }
    else{

        Console_log('Connection Sucessful'); 
    }
?>