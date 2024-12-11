<?php
include 'db.php';

// Fetch students and exams for dropdowns
$students = mysqli_query($conn, "SELECT * FROM students");
$exams = mysqli_query($conn, "SELECT * FROM exams");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $exam_id = $_POST['exam_id'];
    $marks_obtained = $_POST['marks_obtained'];

    $query = "INSERT INTO marks (student_id, exam_id, marks_obtained) VALUES ('$student_id', '$exam_id', '$marks_obtained')";
    if (mysqli_query($conn, $query)) {
        echo "Marks added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    Student:
    <select name="student_id" required>
        <?php while ($row = mysqli_fetch_assoc($students)) { ?>
            <option value="<?= $row['id'] ?>"><?= $row['name'] ?> (<?= $row['roll_number'] ?>)</option>
        <?php } ?>
    </select><br>
    Exam:
    <select name="exam_id" required>
        <?php while ($row = mysqli_fetch_assoc($exams)) { ?>
            <option value="<?= $row['id'] ?>"><?= $row['subject'] ?> (<?= $row['max_marks'] ?>)</option>
        <?php } ?>
    </select><br>
    Marks Obtained: <input type="number" name="marks_obtained" required><br>
    <button type="submit">Add Marks</button>
</form>
