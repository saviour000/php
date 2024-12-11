<?php
// database connection
$host = 'localhost'; // your database host
$username = 'root'; // your database username
$password = ''; // your database password
$dbname = 'dynamic_search_db'; // your database name

$conn = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['query'])) {
    $query = $_GET['query']; // the search term

    // SQL query to search subjects
    $sql = "SELECT subject_code, subject_name FROM subjects WHERE subject_name LIKE ? OR subject_code LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$query%";
    $stmt->bind_param('ss', $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $subjects = [];
    while ($row = $result->fetch_assoc()) {
        $subjects[] = $row;
    }

    // Return results as JSON
    echo json_encode($subjects);
}

$conn->close();
?>
