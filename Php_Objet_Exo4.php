<?php

include 'class.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$laVie=100;
$Perso1 = new Personnage3($laVie, "Valentin");

$Perso2 = new Personnage3($laVie, "Julien");

$Perso1->Attaquer($Perso2,35);
$Perso2->Attaquer($Perso1,70);
?>
    
</body>
</html>