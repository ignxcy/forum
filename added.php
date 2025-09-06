<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $nick = $_POST["nick"];
    $text = $_POST["text"];
    $data = date("Y-m-d H:i:s");
    require("db.php");
    require("menu.php");
?>
<h2><font color="red">Wpis został dodany!</font></h2>
<?php
    require("stopka.php");
    $wynik = mysqli_query($conn, "INSERT INTO wpisy (nick, text, czas) VALUES ('$nick', '$text', '$data')");
    header("Location: index.php?strona=browse");
?>