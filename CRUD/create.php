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

    <label >Address</label>
    <input name="address" type="text">  <br> <br>

    <input name="register" type="submit">

    </div>

    </form>
</body>
</html>


<?php

include 'db_conn.php';

 if($_POST['register']){
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Password = $_POST['pass'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];
    
//  INSERT QUERY TO INSERT INTO DATA BASE 
   $query =  "INSERT INTO form VALUES ('$FirstName', '$LastName',  '$Password',  '$Gender',  '$Address' )";

   $data = mysqli_query($conn, $query);

   if($data){
    echo "Data inserted Successfully";
   }
   else
   {
    echo "Not Inserted";
}
}

?>