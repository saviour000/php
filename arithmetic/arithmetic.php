<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Enter Number 1</label>
        <input name="num1" type="number"> <br><br>

        <label for="">Enter Number 2</label>
        <input name="num2" type="number"> <br><br>

        <input name="register" type="submit"><br> <br>
    </form>
</body>

</html>

<?php


// Function to add two numbers
function add($a, $b)
{
    return $a + $b;
}

// Function to subtract two numbers
function subtract($a, $b)
{
    return $a - $b;
}

// Function to multiply two numbers
function multiply($a, $b)
{
    return $a * $b;
}

// Function to divide two numbers
function divide($a, $b)
{
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}



if (isset($_POST['register'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "Addition of $num1 and $num2: " . add($num1, $num2) . "\n" . "<br>" . "<br>";
    echo "Subtraction of $num1 and $num2: " . subtract($num1, $num2) . "\n" . "<br>" . "<br>";
    echo "Multiplication of $num1 and $num2: " . multiply($num1, $num2) . "\n" . "<br>" . "<br>";
    echo "Division of $num1 by $num2: " . divide($num1, $num2) . "\n" . "<br>" . "<br>";

}

?>
