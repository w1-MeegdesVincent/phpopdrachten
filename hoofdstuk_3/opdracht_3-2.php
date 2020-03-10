<?php
include "../includes/header.php";
include "../includes/menu.php";
?>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    //variabelen aanmaken taak 1&2
    $trafficLightColor = "groen";
    $ambulanceComing = false;
    $driveOn = true;
    //display taak 1 & 2
    echo "Taak 1 & 2<br>";
    //if-else om te bepalen of je door mag rijden
    if($trafficLightColor == "oranje"||$trafficLightColor == "rood")
    {
        $driveOn = false;
    }
    elseif($ambulanceComing == true)
    {
        $driveOn = false;
    }
    else
    {
        $driveOn = true;
    }

    //if-else die melding geeft dat je door mag rijden
    if($driveOn == true)
    {
        echo "u mag doorrijden<br>";
    }
    else
    {
        echo "u moet stoppen<br>";
    }
    //zorgen voor een break
    echo "<br>"
    ?>
    <?php
    //variabelen aanmaken taak 3
    $countryName="Nederland";
    $currentAge= 17;
    //display taak 3
    echo "Taak 3<br>";
    //if-elsif-else schrijven

    if($currentAge >= 18 && $countryName == "Nederland" || $countryName == "Bulgarije" && $currentAge >= 18 || $countryName == "België" && $currentAge >= 18 || $countryName == "Cyprus" && $currentAge >= 17||$countryName=="Zweden" && $currentAge >= 20)
    {
        echo "jij woont in ".$countryName." en bent ".$currentAge." jaar oud.<br>";
        echo "jij mag hier alle drank drinken";
    }
    elseif($countryName == "België" && $currentAge >= 16 && $currentAge < 18||$countryName=="Zweden" && $currentAge >= 18 && $currentAge <= 20)
    {
        echo "jij woont in ".$countryName." en bent ".$currentAge." jaar oud.<br>";
        echo "jij mag alleen zwakke drank drinken";
    }
    elseif($currentAge <= 18 && $countryName == "Nederland"||$currentAge <= 16 && $countryName == "België" || $currentAge <= 18 && $countryName == "Bulgarije" || $currentAge <= 17 && $countryName == "Cyprus" || $currentAge <= 18 && $countryName == "Zweden")
    {
        echo "jij woont in ".$countryName." en bent ".$currentAge." jaar oud.<br>";
        echo "jij mag niet drinken";
    }
    ?>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>
