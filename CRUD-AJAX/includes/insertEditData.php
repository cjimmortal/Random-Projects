<?php
    include '../connection/dbconn.php';

        $username =$_POST['username'];
        $password =$_POST['password'];
        $id =$_POST['id'];

        $stmnt="UPDATE `crud-ajax` SET `username`=?,`password`=? WHERE id =? ";
        $stmnt=$conn->prepare($stmnt);
        $stmnt->bind_param('ssi',$username,$password,$id);
        $stmnt->execute();

        
    