<?php
include 'db.php';

$students = mysqli_query($conn, "SELECT * FROM students");

while ($student = mysqli_fetch_assoc($students)) {
    echo "<h3>" . $student['name'] . " (" . $student['roll_number'] . ")</h3>";
    $marks = mysqli_query($conn, "
        SELECT exams.subject, exams.max_marks, marks.marks_obtained 
        FROM marks 
        JOIN exams ON marks.exam_id = exams.id 
        WHERE marks.student_id = " . $student['id']);

    $total_marks = 0;
    $total_obtained = 0;

    echo "<table border='1'>";
    echo "<tr><th>Subject</th><th>Max Marks</th><th>Marks Obtained</th></tr>";
    while ($row = mysqli_fetch_assoc($marks)) {
        echo "<tr>
                <td>" . $row['subject'] . "</td>
                <td>" . $row['max_marks'] . "</td>
                <td>" . $row['marks_obtained'] . "</td>
              </tr>";
        $total_marks += $row['max_marks'];
        $total_obtained += $row['marks_obtained'];
    }
    echo "</table>";

    $percentage = ($total_obtained / $total_marks) * 100;
    echo "<p>Total Marks: $total_obtained / $total_marks</p>";
    echo "<p>Percentage: " . number_format($percentage, 2) . "%</p>";
    echo "<p>Result: " . ($percentage >= 40 ? "Pass" : "Fail") . "</p>";
}
?>
