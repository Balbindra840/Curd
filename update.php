<?php

  include 'conn.php';
  $id=$_GET['id'];  
  if(isset($_POST['done'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $q="UPDATE `curdtable` SET `username`='$username',`password`='$password' WHERE id=$id";
    $query=mysqli_query($con,$q);
    header('location:display.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="col-lg-6 m-auto">
      <form method="post"><br><br>
        <div class="card">
          <div class="card-header bg-dark">
            <h1 class="text-white text-center">Update operation</h1>
          </div>
          <br>
          <label>Username : </label>
          <input type="text" name = "username" class="form-control"><br>
          
          <label>Password : </label>
          <input type="password" name = "password" class="form-control"><br>
          <button class ="btn btn-success" type ="submit" name="done">Submit</button>
        </div>
      </form>
    </div>
</body>
</html>
