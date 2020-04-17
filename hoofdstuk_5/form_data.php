<?php
include "../includes/header.php";//../ gebruiken voor includes
include "../includes/menu.php";//../ gebruiken voor includes
?>
<style>
    table
    {
        border-collapse: collapse;
    }
    td
    {
        border: 1px solid black;
    }
</style>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <table>
            <tr>
                <td>
                    Bedrijfsnaam:
                </td>
                <td>
                    <?php
                    echo $_GET["Bedrijfnaam"]
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Voornaam:
                </td>
                <td>
                    <?php
                    echo $_GET["Voornaam"]
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Achternaam:
                </td>
                <td>
                    <?php
                    echo $_GET["Achternaam"]
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefoon:
                </td>
                <td>
                    <?php
                    echo $_GET["Telefoon"]
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    E-mail:
                </td>
                <td>
                    <?php
                    echo $_GET["E-mail"]
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Bericht:
                </td>
                <td>
                    <?php
                    echo $_GET["Bericht"]
                    ?>
                </td>
            </tr>
        </table>
    </main>
    <?php
    include "../includes/footer.php";//../ gebruiken voor includes
    ?>
    </body>
</html>
