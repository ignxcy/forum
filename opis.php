<?php
    $nr = $_GET['nr'];
    require("db.php");
    $wynik = mysqli_query($conn, "DELETE FROM wpisy WHERE idf='$nr'");
?>