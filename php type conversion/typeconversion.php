<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Type Conversion</title>
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

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
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

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h1>PHP Type Conversion</h1>
<p>The table below demonstrates various type casting and conversion operations in PHP.</p>

<table>
    <tr>
        <th>Variable Name</th>
        <th>Variable Type</th>
        <th>Converted Type</th>
        <th>Converted Value</th>
    </tr>
    <?php
    // Declare variables
    $variables = [
        'int_var' => 42,
        'float_var' => 42.42,
        'string_var' => "123",
        'bool_var' => true,
        'array_var' => [1, 2, 3],
        'null_var' => null
    ];

    foreach ($variables as $name => $value) {
        // Original type
        $original_type = gettype($value);

        // Perform conversions
        $converted_types = [
            'int' => (int)$value,
            'float' => (float)$value,
            'string' => (string)$value,
            'bool' => (bool)$value,
            'array' => (array)$value,
        ];

        // Output results
        foreach ($converted_types as $type => $converted_value) {
            echo "<tr>\n";
            echo "<td>$name</td>\n";
            echo "<td>$original_type</td>\n";
            echo "<td>$type</td>\n";
            


            echo "<td>" . htmlspecialchars(print_r($converted_value, true)) . "</td>\n";
            echo "</tr>\n";
        }
    }
    ?>
</table>

</body>
</html>