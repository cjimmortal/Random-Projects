<?php
    include '../connection/dbconn.php';

    // this code is to hide the error 
    $view= isset($view) ? $view: '';

    if(isset($_POST['i'])){
        $id = $_POST['i'];
        $stmnt="SELECT * FROM `crud-ajax` WHERE id = ?";
        $stmnt=$conn->prepare($stmnt);
        $stmnt->bind_param('i',$id);
        $stmnt->execute();
        $result = $stmnt->get_result();
        while($row = $result->fetch_assoc()){
            $view.='
            <center><h4>Create Account</h4></center> 
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" value="'.$row['username'].'" required>
                <small id="emailHelp" class="form-text text-muted">Well never share your username with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password" value="'.$row['password'].'" required>
                <input type="number" class="d-none" name="id" value="'.$row['id'].'" required>
            </div>
            <button type="submit" class="btn btn-success" onclick="updateData()">Submit</button>
            <button  class="btn btn-primary" onclick="cancelEdit()">Back</button>
            ';
        }echo $view;
    }