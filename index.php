<?php
    // inserire qui gli array (se necessario)
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
$nome = $_GET['nome'];
$eMail = $_GET['email'];
$eta= $_GET['eta'];
if(empty($nome) && empty($eMail) && empty($eta)){
    $messaggio= 'Inserisci Credenziali';
}elseif (strlen($nome) > 3  && strpos($eMail,'@') !== false && strpos($eMail,'.') !== false && is_numeric($eta)){
    $messaggio='Accesso Consentito!';
}else{
    $messaggio='Accesso Negato!';
};
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
$numberArray=[];
while(count($numberArray) < 15){
    $number = rand(1,30);
    if(!in_array($number,$numberArray)){
        $numberArray[] = $number;
    }
}
 // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 $paragrafo='Lorem ipsum dolor sit amet ,consectetur adipisicing elit. Dicta ea, itaque placeat eveniet excepturi, qui error mollitia harum, quas eos voluptatum totam animi, iure nisi, eaque quis possimus, amet minima.';
 $explodedParagraph=explode(',', $paragrafo);

//  Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack di gruppo</title>
    <link rel="stylesheet" href="./css/style.css">

    <style>
        /* stile per lo snack 6 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grey, .green {
            padding: 40px;
            float: left;
            width: 50%;
        }
        .grey {
            background: grey;
        }
        .green {
            background: green;
        }
        /* se si vuole aggiungere altro css è preferibile creare un file apparte */
    </style>
    
</head>
<body>
    <section id="snack1">
        
        <h1> Snack 1 </h1>
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
    </section>
    <section id="snack2">
        
        <h1> Snack 2 </h1>
        <p><?php echo $messaggio ?></p>
    </section>
    <section id="snack3">
        
        <h1> Snack 3 </h1>
        <ul>
            <?php foreach($posts as $k => $v){?>
                <?php echo $k?>
                <li>
                    <?php foreach($v as $value){?>
                        <p><?php echo $value['title'];?></p>
                        <p><?php echo $value['author'];?></p>
                        <p><?php echo $value['text'];?></p>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>
    </section>
    <section id="snack4">
        
        <h1> Snack 4 </h1>
        <?php var_dump($numberArray) ?>
    </section>
    <section id="snack5">
        
        <h1> Snack 5 </h1>
        <p><?php var_dump($explodedParagraph)?></p>
    </section>
    <section id="snack6">
        
        <h1> Snack 6 </h1>
        <ul>
            <?php foreach($db as $k => $v){?>
                <?php echo $k?>
                <li>
                    <?php foreach($v as $value){?>
                        <span class="<?php 
                            if($k == 'teachers'){
                                echo 'grey';
                            }else{
                                echo 'green';
                            };
                            ?>"><?php echo $value['name'], $value['lastname']?></span>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>
    </section>
    <section id="snack7">
        
        <h1> Snack 7 </h1>
        <!-- inserire qui il codice dello snack (aprire i tag php se necessario) -->
    </section>
</body>
</html>