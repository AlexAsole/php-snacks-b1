<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body>
<?php

/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$snail = "@";
$snailCheck = strpos($mail, $snail);

$dot = ".";
$dotCheck = strpos($mail, $dot);

if (strlen($name) < 3) {
    echo "<div>Accesso negato!</div>";
} else {
    if($snailCheck === false || $dotCheck === false) {
        echo "<div>Accesso negato!</div>";
    } else {
        if (is_numeric($age) === false) {
            echo "<div>Accesso negato!</div>";
        } else {
            echo "<div>Accesso consentito!</div>";
        }
    }
}

?>
</body>
</html>