<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Filmoteka</title>
</head>
<body>
    <center>
        <?php
            require("db.php");
            include("menu.php");
        ?>
        <div id="top"></div>
        <div id="grafika">Forum klasowe</div>
        <div id="linki"></div>
        <?php
            $roz = ".php";

            if (!isset($_GET["strona"])) {
                    $file = 'main';
                }
            else {
                $file = $_GET["strona"];
            }

            include("$file$roz");
            include("stopka.php");
        ?>
    </center>
</body>
</html>
