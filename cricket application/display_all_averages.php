<?php
session_start();

$players = $_SESSION['players'] ?? [];
$averages = [];

foreach ($players as $player_code => $player) {
    $averages[$player_code] = $player['runs'] / $player['innings_played'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Runs of All Players</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Average Runs of All Players</h1>
        <?php if (empty($players)): ?>
            <p>No players available!</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Player Code</th>
                    <th>Player Name</th>
                    <th>Average Runs</th>
                </tr>
                <?php foreach ($players as $player_code => $player): ?>
                    <tr>
                        <td><?= $player_code ?></td>
                        <td><?= $player['name'] ?></td>
                        <td><?= number_format($averages[$player_code], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <a href="index.php">Back to Main Menu</a>
    </div>
</body>
</html>
