<?php
$partite = array(
    array(
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punteggio_casa' => 55,
        'punteggio_ospite' => 60
    ),
    array(
        'squadra_casa' => 'Ac. Arezzo',
        'squadra_ospite' => 'Dinamo Mosca',
        'punteggio_casa' => 99,
        'punteggio_ospite' => 88
    ),
    array(
        'squadra_casa' => 'Juventus',
        'squadra_ospite' => 'Vicenza',
        'punteggio_casa' => 90,
        'punteggio_ospite' => 85
    )
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
            color: white;
            padding-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <?php foreach ($partite as $partita) {
                    $squadradiCasa = $partita['squadra_casa'];
                    $squadraOspite = $partita['squadra_ospite'];
                    $punteggioCasa = $partita['punteggio_casa'];
                    $punteggioOspite = $partita['punteggio_ospite'];

                    echo "$squadradiCasa - $squadraOspite | $punteggioCasa-$punteggioOspite <br><br>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>