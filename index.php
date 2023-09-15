<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* $animali = array("Gatto", "Cane", "Topo", "Mucca");
        //$aniamli = ["Gatto", "Cane", "Mucca"]
        $animali[10] = "Hello<br>";
        $animali["ciao"] = "Touri";
        foreach($animali as $i => $animale){
            echo $animale .", ". $i;
        }

        $fattoria = array("Gatto" => array("Il ", " fa Miao"),
                            "Cane" => array("Il ", " fa Bau"),
                            "Mucca" => array("La ", " fa Mucca")
                        );
        foreach($fattoria as $animale => $verso){
            echo "<br><h1>" .$verso[0].$animale. $verso[1]. "</h1>";
        }
        echo $fattoria["Gatto"][0]; */

        $serieA = array("Inter" => array(23, 0, 2, 4), "Milan" => array(26,234,0,0), "Juventus" => array(45,1,0,23));
        $stampoRis = array("Punti","Vittorie", "Pareggio", "Sconfitte");
        echo "<h1>Campionato</h1>";
        foreach($serieA as $squadra => $risultati){
            echo "<h2>".$squadra ." : ". $stampoRis[0]. " : " . $risultati[0] ." " . $stampoRis[1]. " : " . $risultati[1] ." ". $stampoRis[2]. " : " . $risultati[2] ." ". $stampoRis[3]. " : " . $risultati[3]."</h2><br>";
        }
        echo "<h1>----------------------Ordinato per nome-----------------------</h1>";
        ksort($serieA, SORT_NATURAL);
        foreach($serieA as $squadra => $risultati){
            echo "<h2>".$squadra ." : ". $stampoRis[0]. " : " . $risultati[0] ." " . $stampoRis[1]. " : " . $risultati[1] ." ". $stampoRis[2]. " : " . $risultati[2] ." ". $stampoRis[3]. " : " . $risultati[3]."</h2><br>";
        }
        arsort($serieA);
        echo "<h1>----------------------Ordinato per punti----------------------</h1>";
        foreach($serieA as $squadra => $risultati){
            echo "<h2>".$squadra ." : ". $stampoRis[0]. " : " . $risultati[0] ." " . $stampoRis[1]. " : " . $risultati[1] ." ". $stampoRis[2]. " : " . $risultati[2] ." ". $stampoRis[3]. " : " . $risultati[3]."</h2><br>";
        }
        $vittore = array_column($serieA, 0);
        array_multisort($vittore, SORT_DESC, $serieA);
        echo "<h1>----------------------Ordinato per Vittorie----------------------</h1>";
        foreach($serieA as $squadra => $risultati){
            echo "<h2>".$squadra ." : ". $stampoRis[0]. " : " . $risultati[0] ." " . $stampoRis[1]. " : " . $risultati[1] ." ". $stampoRis[2]. " : " . $risultati[2] ." ". $stampoRis[3]. " : " . $risultati[3]."</h2><br>";
        }
    ?>
</body>
</html>