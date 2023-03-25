<?php
    include 'conn.php';

    $id = $_GET['id'];
    $q="delete from curdtable where id=$id";
    mysqli_query($con,$q); //connection variable and sql command.
    header('location:display.php'); // to bring in same page.
?>