<?php

include 'connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid']; //this line to access delete id from url and storing inside id variable

    $sql = "delete from crudoperation where id=$id";
    $result = mysqli_query($con, $sql);
    if ($sql == true) {
        //echo "deleted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}//here get methhod use to get things in url i.e deleteid 3 4 etc 
