<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--5

    
        Prendere un testo abbastanza lungo, contenente diverse frasi.
        Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un
        nuovo paragrafo.
        PHP

        PHPSnack 5

    -->

    <?php
    $paragrafi =[]
    $testo = "Sono stati i primi abitanti di quel vasto Continente posto al di là dell'Oceano che, una volta finito sulle carte degli Europei a partire dal XVI secolo, sarebbe divenuto terra di colonizzazione con le drammatiche conseguenze sulle popolazioni preesistenti che, pur essendo a tutti note, costituiscono sempre una parte solo secondaria della storia. Eppure il lungo viaggio che portò gruppi umani ad attraversare lo stretto di Bering, quando una striscia di terre emerse lo consentiva almeno 12.000 anni fa, è da sempre oggett o di ricerche scientifiche: un po' perché il fascino dei nativi americani resta una costante nella storia degli studi, un po' perché può capitare occasionalmente di incappare in qualche dato che conferma come siamo parte di un grande puzzle genetico attraverso il quale è possibile tracciare le stesse linee della storia dell'umanità."
    if (strpos( $testo , ".") !== false) {
     array_push($paragrafi, "apple", "raspberry");
    }
?>
<?php 

    ?>

</body>
</html>