<?php
// Array met poules en teams
$poules = [
    'Poule A' => [
        ['team' => 'Team 1', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 2', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 3', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 4', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0]
    ],
    'Poule B' => [
        ['team' => 'Team 5', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 6', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9],
        ['team' => 'Team 7', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 8', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6]
    ],
    'Poule C' => [
        ['team' => 'Team 9', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 10', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 11', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 12', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule D' => [
        ['team' => 'Team 13', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 14', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 15', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 16', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule E' => [
        ['team' => 'Team 17', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 18', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 19', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 20', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule F' => [
        ['team' => 'Team 21', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 22', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9],
        ['team' => 'Team 23', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 24', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6]
    ],
    'Poule G' => [
        ['team' => 'Team 25', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 26', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 27', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 28', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ],
    'Poule H' => [
        ['team' => 'Team 29', 'gespeeld' => 3, 'gewonnen' => 2, 'verloren' => 1, 'punten' => 6],
        ['team' => 'Team 30', 'gespeeld' => 3, 'gewonnen' => 0, 'verloren' => 3, 'punten' => 0],
        ['team' => 'Team 31', 'gespeeld' => 3, 'gewonnen' => 1, 'verloren' => 2, 'punten' => 3],
        ['team' => 'Team 32', 'gespeeld' => 3, 'gewonnen' => 3, 'verloren' => 0, 'punten' => 9]
    ]
];

// Functie om de tabel te tonen
function toonPoule($pouleNaam, $teams) {
    echo "<div class='poule'>
            <h2>$pouleNaam</h2>
            <table>
                <tr>
                    <th>Teamnaam</th>
                    <th>Gespeeld</th>
                    <th>Gewonnen</th>
                    <th>Verloren</th>
                    <th>Punten</th>
                </tr>";
    foreach ($teams as $team) {
        echo "<tr>
                <td>{$team['team']}</td>
                <td>{$team['gespeeld']}</td>
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
<link rel="stylesheet" href="stylesheets/klassement.css">
    <h1>Klassement Volleybal</h1>
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
