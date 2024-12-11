<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = $_POST['subject'];
    $max_marks = $_POST['max_marks'];

    $query = "INSERT INTO exams (subject, max_marks) VALUES ('$subject', '$max_marks')";
    if (mysqli_query($conn, $query)) {
        echo "Exam added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    Subject: <input type="text" name="subject" required><br>
    Max Marks: <input type="number" name="max_marks" required><br>
    <button type="submit">Add Exam</button>
</form>
