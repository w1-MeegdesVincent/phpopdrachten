<?php

/**
 * User: Vincent Meegdes
 * Date: 5-2-2020-
 * Time: 19:43 PM
 * File: opdracht_2-2.php
 */
?>
<?php
//aanmaken variabelen
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn toch";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "vind je niet";
?>
<!doctype html>
<html>
<head>
    <title>
        2.2.php
    </title>
    <!--	beschrijfing van de website-->
    <meta name="description" content="opdracht 2.2 php">
    <!--	steekwoorden waar de browser naar zoekt -->
    <meta name="keywords" content="opdracht,2.2,php">
    <!--	de type tekens die gebruikt worden -->
    <meta charset="utf-8">
    <!--    het linken van een css bestand -->
    <link href="../css/style.css" type="text/css" rel=stylesheet >
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
                    <a href="opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
        <!--    tekst 1    -->
        <?php
            echo "<p>".$text1 . $text4 . $text5 . $text3.$text10 . "</p>" . "<p>". $text12.$text7.$text10."</p>"."<p>". $text8.$text9."</p>"."<p>". $text12. $text6. $text5. $text3. $text13.$text10."</p>";
        ?>

    <p>
        <!--    tekst 2    -->
        <?php
        echo "<p>"."$text1$text11"."</p>"."<p>"." $text12 $text8 $text5 $text3$text10"."</p>"."<p>"." $text12 $text7$text10"."</p>"."<p>"." $text14$text9"."</p>";
        ?>
    </p>
</main>
</body>
</html>

