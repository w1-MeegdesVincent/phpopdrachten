<?php
?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form_data.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="Bedrijfnaam">Bedrijfsnaam</label>
                </td>
                <td>
                    <input type="text" name="Bedrijfnaam" id="Bedrijfnaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Voornaam">Voornaam</label>
                </td>
                <td>
                    <input type="text" name="Voornaam" id="Voornaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Achternaam">Achternaam</label>
                </td>
                <td>
                    <input type="text" id="Achternaam" name="Achternaam">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Telefoon">Telefoon</label>
                </td>
                <td>
                    <input type="tel" id="Telefoon" name="Telefoon">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="E-mail">E-mail</label>
                </td>
                <td>
                    <input type="email" id="E-mail" name="E-mail">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Bericht">Bericht</label>
                </td>
                <td>
                    <textarea id="Bericht" name="Bericht"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">verzenden</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
