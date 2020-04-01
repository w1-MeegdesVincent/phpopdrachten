<?php
include "../includes/header.php";//../ gebruiken voor includes
include "../includes/menu.php";//../ gebruiken voor includes
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    echo date("d-m-y h:i") ;
    echo "<br>";
    echo $day = date("l");
    echo "<br>";
//    if($day=="Tuesday")
//    {
//        echo "het is Dinsdag";
//    }
//    ?>
    <?php
    switch ($day)
    {
        case "Monday":
            echo "het is vandaag maandag";
            break;
        case "Tuesday":
            echo "het is vandaag dinsdag";
            break;
        case "Wednesday":
            echo "het is vandaag woensdag";
            break;
        case "Thursday":
            echo "het is vandaag donderdag";
            break;
        case "Friday":
            echo "het is vandaag vrijdag";
            break;
        case "Saturday":
            echo "het is vandaag zaterdag";
            break;
        case "Sunday":
            echo "het is vandaag zondag";
            break;
        default:
            echo "krijg aids";
            break;
    }
    echo "<br>";
    echo strtotime("today");
    ?>


</main>
</body>
</html>
