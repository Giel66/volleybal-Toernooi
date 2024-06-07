<!DOCTYPE html>
<html lang="nl">

<link rel="stylesheet" href="stylesheets/Wedstrijdschema.css">

<body>

    <h1>Veldindeling Volleybaltoernooi</h1>

    <?php
    // Voorbeeld data voor wedstrijden
    $wedstrijden = [
        ['veld' => 1, 'team1' => 'Team A', 'team2' => 'Team B', 'tijd' => '10:00'],
        ['veld' => 2, 'team1' => 'Team C', 'team2' => 'Team D', 'tijd' => '10:30'],
        ['veld' => 3, 'team1' => 'Team E', 'team2' => 'Team F', 'tijd' => '11:00'],
        ['veld' => 1, 'team1' => 'Team G', 'team2' => 'Team H', 'tijd' => '11:30'],
        ['veld' => 2, 'team1' => 'Team I', 'team2' => 'Team J', 'tijd' => '12:00'],
        ['veld' => 3, 'team1' => 'Team K', 'team2' => 'Team L', 'tijd' => '12:30'],
    ];
    
    ?>

    <table>
        <tr>
            <th>Veld</th>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Tijd</th>
        </tr>
        <?php foreach ($wedstrijden as $wedstrijd): ?>
            <tr>
                <td><?php echo htmlspecialchars($wedstrijd['veld']); ?></td>
                <td><?php echo htmlspecialchars($wedstrijd['team1']); ?></td>
                <td><?php echo htmlspecialchars($wedstrijd['team2']); ?></td>
                <td><?php echo htmlspecialchars($wedstrijd['tijd']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
