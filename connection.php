<?php
$con = new mysqli('localhost', 'root', '', 'crud');
if (!$con) {
    die(mysqli_error($con));
}
//echo "successfully connected";
/*if($con==true){
    echo "sucessfully connected";
}
else{
    die(mysqli_error($con));
}*/