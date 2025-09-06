<?php
    $lp = $_GET['lp'];
    $nick = $_GET['nick'];
    $text = $_GET['text'];
    require("db.php");
    $wynik = mysqli_query($conn, "DELETE FROM wpisy WHERE lp='$lp'");
    echo "<h1>Usunięto wpis użytkownika <b><font color='red'>$nick</font></b> o lp <b><font color='red'>$lp</font></b></h1>";
    header("refresh:1.5;url=index.php?strona=browse");
?>