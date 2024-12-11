<?php
include 'db_conn.php';

$id = $_GET['id'];

$query = "SELECT * FROM FORM WHERE id = '$id' ";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data)

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Opertaion</title>
</head>

<body>
    <form action="" method="POST">
        <h2>Update</h2>

        <div class="form">

            <label>First Name</label>
            <input value="<?php echo $result['fname'] ?>" name="fname" type="text"> <br> <br>

            <label>Last Name</label>
            <input value="<?php echo $result['lname'] ?>" name="lname" type="text"> <br> <br>


            <label>Gender</label>
            <select name="gender" id="">
                <option value="Not Selected">Not Selected</option>
                <option value="Male" <?php if ($result['Gender'] == 'Male') {
                    echo "selected";
                } ?>>Male</option>
                <option value="Female" <?php if ($result['Gender'] == 'Female') {
                    echo "selected";
                } ?>></option>>FeMale
                </option>
            </select> <br> <br>

            <label>Address</label>
            <input value="<?php echo $result['Address'] ?>" name="address" type="text"> <br> <br>

            <input name="update" type="Submit">

        </div>

    </form>
</body>

</html>


<?php

include 'db_conn.php';

if ($_POST['update']) {
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];

    $query = "INSERT INTO form VALUES ('$FirstName', '$LastName', '$Gender')";

    $query = "UPDATE FORM SET fname = '$FirstName', lname = '$LastName' , Gender = '$Gender' WHERE id = '$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted Successfully";
    }else {
        echo "Not Inserted";
    }
}
?>