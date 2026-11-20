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
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$w = $_POST['wiek'];

//echo "$imie $nazwisko $w";
require_once('polaczenie.php');


$zapytanie = "INSERT INTO `dane`(`imie`, `nazwisko`, `wiek`) VALUES ('$imie','$nazwisko',$w)";

//echo $zapytanie;
$czy_wyslalo = mysqli_query($conn,$zapytanie);

if($czy_wyslalo){
    header("Location: index.php");
}
else{
    echo "BŁĄD!!!";
}

mysqli_close($conn);

?>


</main>
<footer><p>Autor strony: PESEL &copy; </p></footer>
    
</body>
</html>