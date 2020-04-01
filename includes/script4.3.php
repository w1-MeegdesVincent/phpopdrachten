<?php
//taak 2
$task2 ="Lancering in:";

$counter = 20;
while($counter >= 0 )
{
    $task2 = $task2 . " " . $counter . ",";
    $counter--;
}
//taak 3
$task3 = "Lancering in:";

for($counter2 = 20; $counter2 >= 0; $counter2--)
{
    $task3 = $task3 . " " . $counter2 . ",";
}

//taak 4
$task4 = "";

$iteratie = 1;
while($iteratie <= 6)
{
    $task4 = $task4."<h$iteratie>"."Dit is de ".$iteratie."e iteratie"."</h$iteratie>";
    $iteratie++;
}

//taak 5
$task5 = "";


for($iteratie2 = 0; $iteratie2 <= 10; $iteratie2++)
{
    $task5 = $task5."<td>"."Dit is de ".$iteratie2."e iteratie"."</td>";
}

//taak 6
$task6 ="";

$age = 17;
$year = 2020;
while($year >= 2002)
{
    if($year == 2020) {
        $age = $age + 1;
        $task6 = $task6 . "<p>" . "In " . $year . " ben/word ik " . $age . " jaar oud" . "</p>";
        $year--;
        $age--;
    }
    else
    {
        $task6 = $task6."<p>"."In ".$year." was ik ".$age." jaar oud"."</p>";
        $year--;
        $age--;
    }
    if ($year == 2002)
    {
        $task6 = $task6."<p>"."In ".$year." was ik geboren";
    }
}

//taak 7
$task7 = " ";
$age2 = "17";
$lifefase = "";

for($year2 = 2020;$year2 >=2002; $year2--)
{
    if($age2 == 20)
    {
        $lifefase = " en word ik een volwassenen";
    }
    elseif($age2 == 18)
    {
        $lifefase = " en word ik een adolescent";
    }
    elseif($age2 == 12)
    {
        $lifefase = " en word ik een puber";
    }
    elseif($age2 == 8)
    {
        $lifefase = " en word ik een tiener";
    }
    elseif($age2 == 4)
    {
        $lifefase = " en word ik een kleuter";
    }
    elseif($age2 == 2)
    {
        $lifefase = " en word ik een peuter";
    }
   //tweede if else
    if($year2 == 2020) {
        $age2 = $age2 + 1;
        $task7 = $task7 . "<p>" . "In " . $year2 . " ben/word ik " . $age2 . " jaar oud" .$lifefase. "</p>";
        $age2--;
    }
    else
    {
        $task7 = $task7."<p>"."In ".$year2." was ik ".$age2." jaar oud".$lifefase."</p>";
        $age2--;
    }
    if ($year2 == 2002)
    {
        $task7 = $task7."<p>"."In ".$year2." was ik geboren";
    }
}
?>