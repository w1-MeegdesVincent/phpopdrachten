<?php
include "../includes/header.php";
include "../includes/menu.php";
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

<main id="wrapper">
    <h2>Uitwerkingen</h2>
        <!--    tekst 1    -->
        <?php
            echo "<p>".$text1 .  $text4 . $text5 . $text3.$text10 . "</p>" . "<p>". $text12.$text7.$text10."</p>"."<p>". $text8.$text9."</p>"."<p>". $text12. $text6. $text5. $text3. $text13.$text10."</p>";
        ?>

        <!--    tekst 2    -->
        <?php
        echo "<p>"."$text1$text11"."</p>"."<p>"." $text12 $text8 $text5 $text3$text10"."</p>"."<p>"." $text12 $text7$text10"."</p>"."<p>"." $text14$text9"."</p>";
        ?>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>

