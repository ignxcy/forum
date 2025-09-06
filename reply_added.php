<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require("db.php");
require("menu.php");

$nick = $_POST["nick"];
$nick_tworcy = $_POST["nick_tworcy"];
$lp = $_POST["lp"];
$text = $_POST["text"];
$data = date("Y-m-d H:i:s");

// INSERT z określonymi kolumnami i AUTO_INCREMENT
$wynik = mysqli_query($conn, "
    INSERT INTO wpisy (nick, text, czas) VALUES ('$nick', 'ODPOWIEDŹ NA WPIS: $nick_tworcy O L.P. $lp: $text', '$data')
");

if ($wynik) {
    header("Location: index.php?strona=browse");
    exit;
}
?>
