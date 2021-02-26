<?php 

/* Creiamo un array 'matches' contenente altri array i quali rappresentano 
delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 */

$matches = [
    [
        "Home team" => "Olimpia Milano",
        "Visiting team" => "Cantù",
        "Home points" => 55,
        "Visiting points" => 60
    ],
    [
        "Home team" => "Busto Arzizio",
        "Visiting team" => "Tor Pignattara",
        "Home points" => 120,
        "Visiting points" => 121
    ],
    [
        "Home team" => "Topolinia",
        "Visiting team" => "Paperopoli",
        "Home points" => 78,
        "Visiting points" => 96
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Partite</title>
</head>
<body>

<?php 

for ($i=0; $i < count($matches); $i++) { 
    echo 
    "<div>" .
    $matches[$i]["Home team"] .
    " - " . 
    $matches[$i]["Visiting team"] . 
    " | " . 
    strval($matches[$i]["Home points"]) .
    " - " . 
    strval($matches[$i]["Visiting points"]) . 
    "</div>";
}

?>

    
</body>
</html>