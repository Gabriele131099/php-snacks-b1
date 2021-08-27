<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
    <!--
        6

        Utilizzare questo array di partenza e
        stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un
        rettangolo verde.
-->
<?php
 
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
    $green='';
    $blue='';
    foreach ($db as $key => $worker) {
        ($key==='teachers') ? $green .= "<div class='verde'> -- " . $key 
        : $blue .="<div class='blue'> -- " . $key; 
        foreach ($worker as $k) {
            ($key==='teachers') ? $green .='<br>'.$k['name'] .' '.$k['lastname'].'<br>' 
            : $blue .='<br>'.$k['name'] .' '.$k['lastname'].'<br>'; 
        }        
    }
    echo $green.'</div>';
    echo $blue.'</div>';
 
?>
</body>
</html>