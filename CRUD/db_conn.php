<?php

$conn = mysqli_connect('localhost', 'root', '', 'new');

if(!$conn){
    die("Not Connected" . mysqli_connect_error());
}
// echo "Connected Successfully";

?>