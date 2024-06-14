<?php
// Array met poules en teams
$poules = [
    'Poule A' => [
        ['team' => 'Team 1', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 2', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 3', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 4', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0]
    ],
    'Poule B' => [
        ['team' => 'Team 5', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 6', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9],
        ['team' => 'Team 7', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 8', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6]
    ],
    'Poule C' => [
        ['team' => 'Team 9',  'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 10', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 11', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 12', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule D' => [
        ['team' => 'Team 13', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 14', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 15', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 16', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule E' => [
        ['team' => 'Team 17', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 18', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 19', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 20', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule F' => [
        ['team' => 'Team 21', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 22', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9],
        ['team' => 'Team 23', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 24', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6]
    ],
    'Poule G' => [
        ['team' => 'Team 25', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 26', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 27', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 28', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule H' => [
        ['team' => 'Team 29', 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 30', 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 31', 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 32', 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ]
];

// Functie om de tabel te tonen
function toonPoule($pouleNaam, $teams) {
    echo "<div class='poule'>
            <h2>$pouleNaam</h2>
            <table>
                <tr>
                    <th>Teamnaam</th>
                    <th>Gewonnen</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>";
    foreach ($teams as $team) {
        
        echo "<tr>
                <td>{$team['team']}</td>
                <td>{$team['gewonnen']}</td>
                <td>{$team['verloren']}</td>
                <td>{$team['punten']}</td>
            </tr>";
    }
    echo "   </table>
        </div>";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Klassement</title>

</head>
<body>
<link rel="stylesheet" href="stylesheets/klassemen.css">
    <div class="container">
        <?php
       
        $pouleNames = array_keys($poules);
        for ($i = 0; $i < count($pouleNames); $i += 2) {
            echo "<div class='container'>";
            toonPoule($pouleNames[$i], $poules[$pouleNames[$i]]);
            if ($i + 1 < count($pouleNames)) {
                toonPoule($pouleNames[$i + 1], $poules[$pouleNames[$i + 1]]);
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
