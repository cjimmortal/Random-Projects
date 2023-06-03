<?php
    $conn = new mysqli('localhost','root','','randomprojects');

    if($conn->connect_error){
        die("Connection Error: ".$conn->connect_error);
    }else{
        // echo "Connection Success";
    }