
<?php
    $nick_tworcy = isset($_POST['nick_tworcy']) ? $_POST['nick_tworcy'] : '';
    $lp = isset($_POST['lp']) ? $_POST['lp'] : '';
?>
<h1>Dodaj odpowiedź</h1>
<form method="post" action="reply_added.php">
    <input type="hidden" name="nick_tworcy" value="<?php echo htmlspecialchars($nick_tworcy); ?>">
    <input type="hidden" name="lp" value="<?php echo htmlspecialchars($lp); ?>">

    Nick: <input type="text" name="nick" size="45" maxlength="35" required>
    <p></p>
    Tekst: <input type="text" name="text" size="45" maxlength="35" required>
    <p></p>
    <input type="submit" value="Zatwierdź">
    <input type="reset" value="Wyczyść">
</form>
