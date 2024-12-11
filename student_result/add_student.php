<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roll_number = $_POST['roll_number'];
    $name = $_POST['name'];

    $query = "INSERT INTO students (roll_number, name) VALUES ('$roll_number', '$name')";
    if (mysqli_query($conn, $query)) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    Roll Number: <input type="text" name="roll_number" required><br>
    Name: <input type="text" name="name" required><br>
    <button type="submit">Add Student</button>
</form>
