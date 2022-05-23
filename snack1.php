<?php
## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$giornata25 = [
    [
        [
            "squadraCasa" => "Universo Treviso",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Napoli",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Fortitudo Bologna",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Cremona",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Brescia",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Trento",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Dinamo Sassari",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Olimpia Milano",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Derthona",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Pesaro",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Trieste",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Virtus Bologna",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Brindisi",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Varese",
            "puntiOspite" => rand(1,100),
        ],
    ],
    [
        [
            "squadraCasa" => "Reggiana",
            "puntiCasa" => rand(1,100),
        ],
        [
            "squadraOspite" => "Venezia",
            "puntiOspite" => rand(1,100),
        ],
    ],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($giornata25); $i++){ ?>
        <li> 
            <span>
            <?php echo "{$giornata25[$i][0]['squadraCasa']}"; ?>
            </span>
            -
            <span>
            <?php echo "{$giornata25[$i][1]['squadraOspite']}"; ?>
            </span>
            |
            <span>
            <?php echo "{$giornata25[$i][0]['puntiCasa']}"; ?>
            </span>
            -
            <span>
            <?php echo "{$giornata25[$i][1]['puntiOspite']}"; ?>
            </span>
        </li>
        <?php } ?>
    </ul>
</body>
</html>