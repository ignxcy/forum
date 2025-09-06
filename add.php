<h1>Dodaj</h1>
<form method="post" action="added.php">
    Nick: <input type="text" name="nick" size="45" maxlength="35" required>
    <p></p>
    Tekst: <input type="text" name="text" size="45" maxlength="35" required>
    <p></p>
    <?php
        require("db.php");
        // $wynik = mysqli_query($conn, "SELECT * FROM gatunki");
    ?>
    <p></p>
    <input type="submit" value="Zatwierdź">
    <input type="reset" value="Wyczyść">
</form>