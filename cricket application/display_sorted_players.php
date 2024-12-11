<?php
session_start();

$players = $_SESSION['players'] ?? [];
uasort($players, function($a, $b) {
    return $b['runs'] - $a['runs'];
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players Sorted by Runs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Players Sorted by Runs</h1>
        <?php if (empty($players)): ?>
            <p>No players available!</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Player Code</th>
                    <th>Player Name</th>
                    <th>Runs</th>
                </tr>
                <?php foreach ($players as $player_code => $player): ?>
                    <tr>
                        <td><?= $player_code ?></td>
                        <td><?= $player['name'] ?></td>
                        <td><?= $player['runs'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <a href="index.php">Back to Main Menu</a>
    </div>
</body>
</html>
