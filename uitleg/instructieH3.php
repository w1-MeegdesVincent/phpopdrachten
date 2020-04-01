<?php

/**
 * User: Vincent Meegdes
 * Date: 5-2-2020
 * Time: 14:28 PM
 * File: opdracht_2-1.php
 */
?>
<!doctype html>
<html>
<head>
    <title>
        index.php
    </title>
    <!--	beschrijfing van de website-->
    <meta name="description" content="inlevering opdrachten">
    <!--	steekwoorden waar de browser naar zoekt -->
    <meta name="keywords" content="opdrachten,inleveren,etc">
    <!--	de type tekens die gebruikt worden -->
    <meta charset="utf-8">
    <!--    het linken van een css bestand -->
    <link href="css/style.css" type="text/css" rel=stylesheet >
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk_2/opdracht_2-1.php">Opdracht 2.2</a>
                </li>
                <li>
                    <a href="hoofdstuk_2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
//    different types of variables
        $profession = "ICT'ers"; //string
        $year = 2019; //Integer
        $percentage = 17.1; //float
        $subjects = ["Internet", "Computers", "software"]; //array
        $subjects = array("Internet", "Computers", "software");// old method array
        $skills = false;//boolean

//    if/else
//    == is gelijk aan
//    != is niet gelijk aan
//    < is kleiner dan <= is waarde of lager
//    > is groter dan => is waarde of hoger
//    || een waarde moet goed zijn  && waardes moeten bijde goed zijn
    if($skills == true)
    {
        echo "skills is true";
    }
    else
    {
        echo "skills is false";
    }
//    include()
//    require()
    ?>
</main>
</main>
</body>
</html>