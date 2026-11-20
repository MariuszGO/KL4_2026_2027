<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane uczniów</title>
    <link rel="stylesheet" href="uczniowie.css">
</head>
<body>
<header><h1>Dane o uczniach</h1></header>
<nav>
    <a href="index.php"> Strona główna</a>
    <a href="wstawianie.html"> Dodaj ucznia </a>
</nav>
<main>

<?php

require_once('polaczenie.php');

$zap = "SELECT * FROM dane";

$wynik = mysqli_query($conn, $zap);

echo "<table><tr><th>Imie</th><th>Nazwisko</th><th>Wiek</th></tr>";

while($osoby = mysqli_fetch_array($wynik)){

    $imie = $osoby['imie'];
    $nazwisko = $osoby['nazwisko'];
    $wiek = $osoby['wiek'];

    echo "<tr><td>$imie</td><td>$nazwisko</td><td>$wiek</td><tr>";
}

echo "</table>";

?>


</main>
<footer><p>Autor strony: PESEL &copy; </p></footer>
    



</body>
</html>