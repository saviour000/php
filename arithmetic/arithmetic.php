<?php
// Function to add two numbers
function add($a, $b) {
    return $a + $b;
}

// Function to subtract two numbers
function subtract($a, $b) {
    return $a - $b;
}

// Function to multiply two numbers
function multiply($a, $b) {
    return $a * $b;
}

// Function to divide two numbers
function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

// Example usage:
$num1 = 10;
$num2 = 5;

echo "Addition of $num1 and $num2: " . add($num1, $num2) . "\n" . "<br>";
echo "Subtraction of $num1 and $num2: " . subtract($num1, $num2) . "\n" . "<br>";
echo "Multiplication of $num1 and $num2: " . multiply($num1, $num2) . "\n" . "<br>";
echo "Division of $num1 by $num2: " . divide($num1, $num2) . "\n" . "<br>";
?>