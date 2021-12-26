<?php

include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="crud.php" class="text-light">ADD USER</a> </button> <!-- class test-ligt for visible text on button bootsrap class -->
        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">Sr no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `crudoperation`";
                $result = mysqli_query($con, $sql);
                if ($sql == true) {
                    /* $row = mysqli_fetch_assoc($result);
                    echo $row['name'];
                    $row = mysqli_fetch_assoc($result);
                    echo $row['name'];
                    $row = mysqli_fetch_assoc($result);
                    echo $row['name']; */
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $password . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php ?updateid=' . $id . '"  class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php ?deleteid=' . $id . ' "  class="text-light">Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
                ?>


                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>

</html>