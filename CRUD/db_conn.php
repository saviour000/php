<?php

$conn = mysqli_connect('localhost', 'root', '', 'new');

// new is Database Name , Change new and replace it with your Database Name

if(!$conn){
    die("Not Connected" . mysqli_connect_error());
}
// echo "Connected Successfully";

?>
