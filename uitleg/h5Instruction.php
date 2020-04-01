<?php
include "../includes/header.php";//../ gebruiken voor includes
include "../includes/menu.php";//../ gebruiken voor includes
?>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form action="form_data.php" method="post" >
        <label for="firstname">Firstname</label>
        <input autocomplete="off" type="text" name="firstname" id="firstname">

        <label for="lastname">Lastname</label>
        <input autocomplete="off" type="text" name="lastname" id="lastname">

        <select name="subject">
            <option value="php">PHP</option>
            <option value="js">Javascript</option>
        </select>
        <input type="submit">
    </form>
</main>
<?php
include "../includes/footer.php";//../ gebruiken voor includes
?>
</body>
</html>
