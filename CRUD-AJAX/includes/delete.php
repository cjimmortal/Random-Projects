<?php
    include '../connection/dbconn.php';

    if(isset($_POST['i'])){
        ECHO $id = $_POST['i'];
        $stmnt="DELETE FROM `crud-ajax` WHERE id =?";
        $stmnt=$conn->prepare($stmnt);
        $stmnt->bind_param('i',$id);
        $stmnt->execute();
    }