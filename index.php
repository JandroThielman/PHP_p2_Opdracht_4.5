<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 4</title>
</head>
<body>
    <?php
    //auteur:jandro
    //functie: numbers

    //initialisatie

        echo "<p>Opdracht 4</p><br>";

        //opdracht5
        echo "<h1>Opdracht 4.5<br></h1>";

        $g = 20;
        $b = $g % 2;

        if ($b == 0) {
            echo "<h1>Is het getal $g even? Ja<br></h1>";
        } elseif ($b == 1) {
            echo "<h1>Is het getal $g even? Nee<br></h1>";
        } else {
            echo "<h1>Error<br></h1>";
        }

        //opdracht6
        echo "<h1>Opdracht 4.6<br></h1>";

        $hour = date("H : i");
        $temperatuur = 30;
        $luchtvochtigheid = 90;

        if ($hour >= 17.00 && $hour <=7.59 && $temperatuur <= 20 && $luchtvochtigheid <= 85) {
            echo "<h1>turn off<br></h1>";
        } else {
            echo "<h1>turn on<br></h1>";
        }

        //opdracht7
        echo "<h1>Opdracht 4.7<br></h1>";

        $spaargeld = 1200;
        $iphone = 1000;
        $bereken = $spaargeld - $iphone;

        
        if ($bereken <= -250) {
            echo"<h1>Je spaargeld is nu: $spaargeld euro, je komt dus $bereken euro te kort! Je kan beter nog even een baantje gaan zoeken.</h1><br>";
        } elseif ($bereken >= -250 && $bereken <= -1) {
            echo"<h1>Je spaargeld is nu: $spaargeld euro, je komt dus $bereken euro te kort! Je bent er bijna blijf doorgaan.</h1><br>";
        } elseif ($bereken >= 0 && $bereken <= 25) {
            echo"<h1>Je spaargeld is nu: $spaargeld euro, hiermee is het mogelijk om de iPhone te kopen!</h1><br>";
        } elseif ($bereken >= 26) {
            echo"<h2>Je spaargeld is nu: $spaargeld euro, hiermee is het mogelijk om de iPhone te kopen! Je hebt nog $bereken euro over voor bijvoorbeeld een hoesje.</h2><br>";
        } else {
            echo "<h1>System Failure</h1><br>";
        }

        //opdracht8
        echo "<h1>Opdracht 4.8<br></h1>";

        $leeftijd = 17;
        $stempas = false;

        if ($leeftijd >= 16) {
            echo "<h1>Je mag praktijkexamen voor je scooterrijbewijs doen.<br></h1>";
        } else {
            echo "<h1>Je mag praktijkexamen voor je scooterrijbewijs niet doen.<br></h1>";
        }
 
        if ($leeftijd >= 18 && $stempas == true) {
            echo "<h1>Je mag wel stemmen.<br></h1>";
        } elseif ($leeftijd >= 18 && $stempas == false) {
            echo "<h1>Je mag niet stemmen, want je hebt geen stempas!<br></h1>";
        } else {
            echo "<h1>Je mag niet stemmen.<br></h1>";
        }

    ?>
</body>
</html>