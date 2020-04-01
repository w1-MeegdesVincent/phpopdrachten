<?php
/**
 * User: Vincent Meegdes
 * Date: 25-3-2020
 * Time: 14:28 PM
 * File: opdracht_4.3 .php
 */
include "../includes/header.php";//../ gebruiken voor includes
include "../includes/menu.php";//../ gebruiken voor includes
?>

    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
        include "../includes/script4.3.php";
        echo $task2;
        echo "<br>";
        echo $task3;
        echo "<br>";
        echo $task4;
        echo "<br>";
        ?>
        <table>
            <tr>
                <?php
                echo $task5;
                ?>
            </tr>
        </table>
        <?php
        echo $task6;
        echo $task7;
        ?>
    </main>
    <?php
    include "../includes/footer.php";//../ gebruiken voor includes
    ?>
    </body>
</html>

