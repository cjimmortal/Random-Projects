<?php
    include '../connection/dbconn.php';

    // this code is to hide the error 
    $view= isset($view) ? $view: '';
    $id= isset($id) ? $id: '';
    

    if(isset($_POST['i'])){
        $stmnt="SELECT * FROM `crud-ajax`";
        $stmnt=$conn->prepare($stmnt);
        $stmnt->execute();
        $result = $stmnt->get_result();
        while($row = $result->fetch_assoc()){
            $id++;
            $view.='
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['password'].'</td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="displayeEditData('.$row['id'].')">Edit</button>
                        <button type="button" class="btn btn-danger" onclick="deleteRow('.$row['id'].')">Delete</button>
                    </td>
                </tr>
            ';
        }echo $view;
    }