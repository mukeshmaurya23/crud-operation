<?php
include 'connection.php';
//isset then post method -> if click on submit then on;y insert records in database

// code for inserting data in database
if (isset($_POST['submit'])) {
    $name = $_POST['name']; //name="attribute" should pass here 
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into crudoperation(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";

    $result = mysqli_query($con, $sql); //mysqli_query to execute sql query and it syntax mysqli_query(connection, query, resultmode)
    if ($sql == true) {
        /* $message = 'Successfully inserted ';
        echo $message; */
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>crud application</title>
</head>

<body>
    <div class="container my-5">


        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter the name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter the email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter the mobile" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter the password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>

</html>