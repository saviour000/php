<?php
include 'db_conn.php';

$id = $_GET['id'];

$query = "DELETE FROM FORM WHERE id = '$id' ";

$data = mysqli_query($conn,$query);
?>
