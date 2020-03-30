<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName()
{
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.
    $subject = $_POST["subject"];
    if ($subject == "js") {
        return "Martijn van de Wetering";
    } elseif ($subject == "php") {
        return "Remco Evers";
    }
}
?>