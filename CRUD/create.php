<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Opertaion</title>
</head>

<body>
    <form action="" method="POST">
        <h2>Registration Form</h2>

        <div class="form">

            <label>First Name</label>
            <input name="fname" type="text"> <br> <br>

            <label>Last Name</label>
            <input name="lname" type="text"> <br> <br>

            <label>Password</label>
            <input name="pass" type="Password"> <br> <br>

            <label>Gender</label>
            <select name="gender" id="">
                <option value="Not Selected">Not Selected</option>
                <option value="Male">Male</option>
                <option value="Female">FeMale</option>
            </select> <br> <br>

            <label>Address</label>
            <input name="address" type="text"> <br> <br>

            <input name="register" value="register" type="submit">

        </div>
    </form>

    <a href="read.php">Display</a>
</body>
</html>

<?php

include 'db_conn.php';

if (isset($_POST['register'])) {
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Password = $_POST['pass'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];

    $query = "INSERT INTO `form` (`fname`,`lname`,`Password`,`Gender`,`Address`) VALUES ('$FirstName','$LastName','$Password',  '$Gender','$Address')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted Successfully";
    } else {
        echo "Not Inserted";
    }
}
?>
