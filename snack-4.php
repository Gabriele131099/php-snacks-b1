<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--4

        Creare un array contenente qualche alunno di un’ipotetica classe.
        Ogni alunno avrà i seguenti dati:
        nome
        cognome
        un array contenente i suoi voti scolastici
        Stampare nome, cognome e la media dei voti di ogni alunno.
        PHP

        PHPSnack 4
    -->

    <?php

$students = [


        [
            'name' => 'Jhonny',
            'surname' => 'Papagni',
            'voti' => [22,30,18,24,21,16,18]
        ],
        [
            'name' => 'Davide',
            'surname' => 'Muzzu',
            'voti' => [18,23,19,12,28,12,20]
        ],
        [
            'name' => 'Sandro',
            'surname' => 'Arras',
            'voti' => [12,30,18,23,26,19,20]
        ],
        [
            'name' => 'Domenico',
            'surname' => 'Castelli',
            'voti' => [18,20,18,19,22,21,16,]
        ],
        [
            'name' => 'Simone',
            'surname' => 'Fantoccio',
            'voti' => [14,27,24,30,21,18,25]
        ],
        [
            'name' => 'Anna',
            'surname' => 'Tedde',
            'voti' => [16,25,14,20,12,12,20]
        ],
    ];

?>
<?php 

    foreach ($students as $student) {
        echo $student['name'];
        echo ' '.$student['surname'];
        $sum = array_sum ($student['voti'])/count($student['voti']);
        $media = round($sum, 2);
        echo ', Media: '.$media.'<br>';
            
                }
    ?>

</body>
</html>