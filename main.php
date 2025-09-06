<h1>Strona główna</h1>
<h2>Liczba wpisów na forum:
<?php 
    $wynik = mysqli_query($conn, "SELECT * FROM wpisy");
    $ile = mysqli_num_rows($wynik);
    echo "<b><font color='red'>$ile</font></b></h2>"
?>