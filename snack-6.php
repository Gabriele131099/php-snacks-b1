<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    foreach ($db as $key => $worker) {
        if ($key==='teachers') {
            echo "<div style='color: #77e419'> -- " . $key . '</div>';
        }if ($key==='pm') {
            echo "<div style='color: #1822e8'> -- " . $key . '</div>';
        }
        foreach ($worker as $k) {
            if ($key==='teachers') {
                echo "<span style='color: #77e419'>" .  $k['name'] . '</span>';
                echo "<span style='color: #77e419'>" . ' '.$k['lastname'] . '</span><br>';

            }if ($key==='pm') {
                echo "<span style='color: #1822e8'>" .  $k['name'] . '</span>';
                echo "<span style='color: #1822e8'>" . ' '.$k['lastname'] . '</span><br>';

            }    
        }
    }
 
?>
</body>
</html>