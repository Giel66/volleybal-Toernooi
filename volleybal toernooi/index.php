<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volleybal Toernooi</title>
</head>
<body>
		<?php
			require('includes/header.php');
		?>
<?php
    if(isset($_GET["PaginaNr"])) {
        $PaginaNr = $_GET["PaginaNr"];
        
        switch($PaginaNr) {
            case 1: 
                require('pages/hoofdpagina.php');
                break;

            case 2:
                require('pages/klassement.php');
                break;

            case 3: 
                require('pages/wedstrijdschema.php');
                break;

            case 4: 
                require('pages/puntentelling.php');
                break;

            case 5: 
                require('pages/teams.php');
                break;

            case 6: 
                require('pages/inschrijven.php');
                break;

            case 7:
                require('pages/login.php');
                break;

                default:
                break;
                }
            }
            require ('includes/footer.php');
?>
</body>
</html>
