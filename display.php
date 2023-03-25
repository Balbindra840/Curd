<?php
  include 'conn.php';

    // $username=$_POST['username'];
    // $password=$_POST['password'];

    $q="select * from curdtable";
    $query=mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-secondary">
    <div class="container fixed-top"> 
<a href="insert.php"><img src="./insert-transformed.png" alt="insert" height =80px></a></div><br><br>
    <div class="container">
        <div class="col-lg-12">
            <br>
            <br>
            <h1 class="text-white text-center">Display table data </h1><br>
            <table class="table table-striped table-hover table-bordered">
                <tr class = "bg-dark text-center">
                    <th class ="text-white">Id</th>
                    <th class ="text-white">Username</th>
                    <th class ="text-white">Passsword</th>
                    <th class ="text-white">Delete</th>
                    <th class ="text-white">Update</th>
                </tr>
                
    <?php
        include 'conn.php';
        $q="select * from curdtable";
        $query=mysqli_query($con,$q);
        while ($res = mysqli_fetch_array($query)){
    ?>
                
                <tr>
                    <td><?php echo $res['id']?></td>
                    <td><?php echo $res['username']?></td>
                    <td><?php echo $res['password']?></td>
                    <td><button class="btn-danger btn"><a class = "text-light text-decoration-none"href="delete.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
                    <td><button class="btn-success btn"><a class = "text-light text-decoration-none"href="update.php?id=<?php echo $res['id'];?>">Update</a></button></td>
                      
                </tr>
    <?php
        }
    ?>
            </table>

        </div>
    </div>
</body>
</html>