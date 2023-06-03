<?php
    include '../connection/dbconn.php';

        $username =$_POST['username'];
        $password =$_POST['password'];

        $stmnt="INSERT INTO `crud-ajax` SET `username`=?,`password`=?";
        $stmnt=$conn->prepare($stmnt);
        $stmnt->bind_param('ss',$username,$password);
        $stmnt->execute();


        
    