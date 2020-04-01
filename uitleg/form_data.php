<?php
//ophalen formulier gegevens h5instructions
//print_r($_POST);

echo $_POST["firstname"] . " " . $_POST["lastname"];

echo "<br>";

$subject= $_POST["subject"];
if($subject == "js")
{
    echo "Dit is uitleg over het vak javascript";
}
elseif($subject == "php")
{
    echo "Dit is uitleg over het vak PHP";
}
?>