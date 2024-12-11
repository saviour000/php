<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $player_code = $_POST['player_code'];
    $name = $_POST['name'];
    $runs = $_POST['runs'];
    $innings_played = $_POST['innings_played'];

    $_SESSION['players'][$player_code] = [
        'name' => $name,
        'runs' => $runs,
        'innings_played' => $innings_played
    ];

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Player Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Enter Player Details</h1>
        <form method="POST">
            <label for="player_code">Player Code:</label>
            <input type="text" id="player_code" name="player_code" required><br>

            <label for="name">Player Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="runs">Runs Scored:</label>
            <input type="number" id="runs" name="runs" required><br>

            <label for="innings_played">Innings Played:</label>
            <input type="number" id="innings_played" name="innings_played" required><br>

            <button type="submit">Save Player</button>
        </form>
        <a href="index.php">Back to Main Menu</a>
    </div>
</body>
</html>
