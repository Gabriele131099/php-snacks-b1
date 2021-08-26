<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $partite = [
               [
                    'home' => 'Olimpia Milano',
                    'out' => 'Cantù',
                    'homeScore' => '55'
                    'outScore' => '60'
                ],
                [
                    'home' => 'Dinamo',
                    'out' => 'Virtus Roma',
                    'homeScore' => '35'
                    'outScore' =>  '60'
                ]

            ]
            
            for($i = 0; $i < count($partite); $i++){
                //$string = $partite[$i]['casa'] . '-'
                $string = "{$partite[$i]['home']} - {$partite[$i]['out']} | {$partite[$i]['homeScore']}-{$partite[$i]['outScore']}<br/>";
                echo $string;
               }
               
    ?>

    <!-- 1
        Creiamo una struttura dati che rappresenta le partite di basket
        di un’ipotetica tappa del calendario.
        Ogni array interno conterrà le seguenti informazioni:
        una squadra di casa
        una squadra ospite
        punti fatti dalla squadra di casa
        punti fatti dalla squadra ospite
        Stampiamo a schermo tutte le partite con questo schema:
        Olimpia Milano - Cantù | 55-60
        PHP

        PHPSnack 1

    -->
</body>
</html>