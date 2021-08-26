<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--3

        Passare 3 parametri GET: name, mail e age.
        Verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri
        che mail contenga un punto e una chiocciola
        che age sia un numero
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
        PHP

        PHPSnack 2
    -->

    <?php
            $mail = $_GET["mail"];
            $name = $_GET["name"];
            $age = $_GET["age"];
            echo $mail . $name . $age . '<br>';
            if (strlen($name)>3 && strpos( $mail , ".") !== false && strpos( $mail , "@") !== false && is_numeric($age)) 
            {
                echo 'accesso acconsentito' ;
            }
            else
            {
                echo 'accesso negato';
            }

        ?>
</body>
</html>