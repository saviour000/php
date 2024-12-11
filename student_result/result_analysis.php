<?php
include 'db.php';

$students = mysqli_query($conn, "SELECT * FROM students");
$total_students = mysqli_num_rows($students);
$passed_students = 0;

while ($student = mysqli_fetch_assoc($students)) {
    $marks = mysqli_query($conn, "
        SELECT exams.max_marks, marks.marks_obtained 
        FROM marks 
        JOIN exams ON marks.exam_id = exams.id 
        WHERE marks.student_id = " . $student['id']);

    $total_marks = 0;
    $total_obtained = 0;

    while ($row = mysqli_fetch_assoc($marks)) {
        $total_marks += $row['max_marks'];
        $total_obtained += $row['marks_obtained'];
    }

    $percentage = ($total_obtained / $total_marks) * 100;
    if ($percentage >= 40) {
        $passed_students++;
    }
}

echo "<p>Total Students: $total_students</p>";
echo "<p>Passed Students: $passed_students</p>";
echo "<p>Pass Percentage: " . number_format(($passed_students / $total_students) * 100, 2) . "%</p>";
?>
