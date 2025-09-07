<h1>Przeglądaj</h1>
<div id="dodawanie"><a href="index.php?strona=add">Dodaj</a></div>
<?php
    require("add.php");
?>
<table border="1" cellspacing="0">
    <tr bgcolor="silver">
        <th width="50">ID</th>
        <th width="50">L.p.</th>
        <th width="220">Nick</th>
        <th width="220">Text</th>
        <th width="70">Data</th>
        <th width="70">Odpowiedz</th>
        <th width="70">Usuń</th>
    </tr>

<?php
    require("db.php");
    $wynik = mysqli_query($conn, "SELECT * FROM wpisy/*ORDER BY text */");
    $i = 1;
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo "<tr>";
        echo '<td>' . $wiersz["lp"] . '</td>';
        echo '<td>' . $i++ . '</td>';
        echo '<td>' . $wiersz["nick"] . '</td>';
        echo '<td>' . $wiersz["text"] . '</td>';
        echo '<td>' . $wiersz["czas"] . '</td>';
        echo '<td align="center"><a href="index.php?strona=answer&lp=' . $wiersz["lp"] . '&nick_tworcy=' . $wiersz["nick"] . '&text=' . $wiersz["text"] .'"><img src="img/reply.png"></a></td>';
        echo '<td align="center"><a href="index.php?strona=delete&lp=' . $wiersz["lp"] . '&nick=' . $wiersz["nick"] . '&text=' . $wiersz["text"] .'"><img src="img/delete.png"></a></td>';
        echo '</tr>';


        echo "<br>";
    }
?>
</table>