<?php include 'connection/dbconn.php'  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-AJAX</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JQUERY CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- JAVASCRIPT CDN --> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</head>
<body style="padding:3rem">
    <center><h1>CRUD-AJAX</h1></center>
    <div class="mainDiv row">
        <div class="col-sm-6">
            <form id="editform" method="post" enctype="multipart/form-data "></form>
            <form id="createForm" method="post" enctype="multipart/form-data ">
                <center><h4>Create Account</h4></center> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary" onclick="insertData()">Submit</button>
            </form>
        </div >
        <div class="col-sm-6">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="displayBox">
               
                   
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        displayData();
        
    });

    function displayData() {
        var i = 1;
        $.ajax({
            url:'includes/display.php',
            method:'post',
            data:{i:i},
            success:function(data){
                $('#displayBox').html(data);
                console.log(data);
            }
        });
    }

    function displayeEditData($id) {
        var i = $id;
        $.ajax({
            url:'includes/displayEditData.php',
            method:'post',
            data:{i:i},
            success:function(data){
                $('#editform').html(data);
                $('#editform').css("display","block");
                $('#createForm').css("display","none");
                
                
            }
        });
    }

    function deleteRow($id){
        var i = $id;
        $.ajax({
            url:'includes/delete.php',
            method:'post',
            data:{i:i},
            success:function(data){
                displayData();
            }
        });
    }

    function insertData(){
        $('#createForm').submit(function(e){
            e.preventDefault();
            var fdi = new FormData(this);
            $.ajax({
                url:'includes/insert.php',
                method:'post',
                data:fdi,
                cache:false,
                contentType:false,
                processData:false,
                success:function(data){
                    displayData();
                    $('#createForm').trigger("reset");
                    window.location.href = "http://localhost/CRUD-AJAX/";
                }
            })
        });
    }

    function updateData() {
        $('#editform').submit(function(e){
            e.preventDefault();
            var fdi = new FormData(this);
            $.ajax({
                url:'includes/insertEditData.php',
                method:'post',
                data:fdi,
                cache:false,
                contentType:false,
                processData:false,
                success:function(data){
                    console.log(data);
                    displayData();
                    $('#editform').css("display","none");
                    $('#createForm').css("display","block");
                }
            })
        })
    }
    
    function cancelEdit() {
        $('#editform').submit(function(e){
            e.preventDefault();
           
            $('#editform').css("display","none");
            $('#createForm').css("display","block");
        })
       
    }

    

</script>