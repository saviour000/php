<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $player_code = $_POST['player_code'];
    $player = $_SESSION['players'][$player_code] ?? null;

    if ($player) {
        $average_runs = $player['runs'] / $player['innings_played'];
    } else {
        $error = "Player not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Average Runs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Display Average Runs of a Player</h1>
        <form method="POST">
            <label for="player_code">Player Code:</label>
            <input type="text" id="player_code" name="player_code" required><br>
            <button type="submit">Get Average</button>
        </form>

        <?php if (isset($average_runs)): ?>
            <p>Average Runs: <?= number_format($average_runs, 2) ?></p>
        <?php elseif (isset($error)): ?>
            <p><?= $error ?></p>
        <?php endif; ?>

        <a href="index.php">Back to Main Menu</a>
    </div>
</body>
</html>
