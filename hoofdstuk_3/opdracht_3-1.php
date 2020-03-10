<?php
include "../includes/header.php";
include "../includes/menu.php";
?>
<?php
$event = "Elfstedentocht";
$kmLength = "200";
$typeEvent = "schaatstocht";
$typeIce = "natuurijs";
$organizer = "Koninklijke Vereniging De Friesche Elf Steden";
$startFinish = " Leeuwarden";
$province = "Friesland";
$timesDone = "15";
$firstTime = "1909";
$timesPerWinter = "1";
$verhaal1 = "De ".$event." (Fries: Alvestêdetocht) is een ".$kmLength." kilometer
lange ".$typeEvent." over ".$typeEvent." die wordt georganiseerd door
de ".$organizer.".".$startFinish.",
de hoofdstad van ".$province.", is start- en aankomstplaats. De
".$event." is inmiddels ".$timesDone." maal verreden en werd voor het
eerst in ".$firstTime." gereden en wordt maximaal ".$timesPerWinter." keer per winter
gehouden.";

$verhaal2 = "De ".$event." (Fries: Alvestêdetocht) is een ".$kmLength." kilometer
lange ".$typeEvent." over ".$typeEvent." die wordt georganiseerd door
de ".$organizer.".".$startFinish.",
de hoofdstad van ".$province.", is start- en aankomstplaats. De
".$event." is inmiddels ".$timesDone." maal verreden en werd voor het
eerst in ".$firstTime." gereden en wordt maximaal ".$timesPerWinter." keer per winter
gehouden.";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    echo $verhaal1;
    echo "<p>".$verhaal2."</p>";
    ?>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>



