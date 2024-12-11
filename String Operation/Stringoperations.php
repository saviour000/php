<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        input[type="text"], input[type="submit"] {
            padding: 8px;
            margin: 10px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>

<h1>String Operations</h1>

<form method="post">
    <label for="str1">String Value 1:</label>
    <input type="text" id="str1" name="str1" required><br><br>
    <label for="str2">String Value 2:</label>
    <input type="text" id="str2" name="str2" required><br><br>
    <input type="submit" value="Perform Operations">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get input strings
    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];

    // Perform operations
    $operations = [
        'Concatenate' => $str1 . $str2,
        'Length of String 1' => strlen($str1),
        'Length of String 2' => strlen($str2),
        'Uppercase String 1' => strtoupper($str1),
        'Uppercase String 2' => strtoupper($str2),
        'Lowercase String 1' => strtolower($str1),
        'Lowercase String 2' => strtolower($str2),
        'Compare Strings' => ($str1 == $str2) ? "Equal" : "Not Equal",
        'Substring of String 1' => substr($str1, 0, 3),  // First 3 characters of str1
        'Substring of String 2' => substr($str2, 0, 3),  // First 3 characters of str2
        'Find Position of String 2 in String 1' => (strpos($str1, $str2) !== false) ? strpos($str1, $str2) : "Not Found",
        'Reverse String 1' => strrev($str1),
        'Reverse String 2' => strrev($str2),
    ];

    // Display results in a table
    echo "<table>";
    echo "<tr><th>String Value 1</th><th>String Value 2</th><th>Operation</th><th>Result</th></tr>";

    foreach ($operations as $operation => $result) {
        echo "<tr><td>" . htmlspecialchars($str1) . "</td><td>" . htmlspecialchars($str2) . "</td><td>" . htmlspecialchars($operation) . "</td><td>" . htmlspecialchars($result) . "</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
