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
            $home = 'Olimpia Milano';
            $out = 'Cantu';
            $homeScore = 55;
            $outScore = 60;
            
            echo $home .' - '. $out . ' | '. $homeScore . '-' . $outScore;
    ?>

    <!-- 
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

        

        4

        Creare un array di array.
        Ogni array figlio avrà come chiave una data in questo formato:
        DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati
        a quella data.
        Stampare ogni data con i relativi post.

        Qui l’array di esempio:
        https://www.codepile.net/pile/R2K5d68z
        PHP

        PHPSnack 3

        5

        Creare un array contenente qualche alunno di un’ipotetica classe.
        Ogni alunno avrà i seguenti dati:
        nome
        cognome
        un array contenente i suoi voti scolastici
        Stampare nome, cognome e la media dei voti di ogni alunno.
        PHP

        PHPSnack 4

        6

        Prendere un testo abbastanza lungo, contenente diverse frasi.
        Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un
        nuovo paragrafo.
        PHP

        PHPSnack 5

        7

        Utilizzare questo array di partenza e
        stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un
        rettangolo verde.
    -->
</body>
</html>