<!DOCTYPE html>
<html lang='pl-PL'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Metoda POST</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>

    <form method="POST">
        <label for="imie">Imie: </label>
        <input type="text" id="imie" name="imie"><br>
        <label for="wiek">Wiek: </label>
        <input type="number" id="wiek" name="w" min="1" max="90" value="18">
        <br><input type="submit" value="Wyślij">
    </form>
    


<?php
/* Pierwszy sposób zabezpieczenia */
/*
if(isset($_POST['imie']) && isset($_POST['w'])){
    $imie = $_POST['imie'];
    $wiek = $_POST['w'];

    echo "$imie  $wiek";
}
else{
    echo "brak wartości";
}
*/
/* Drugi sposób zabezpieczenia */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $wiek = $_POST['w'];

    echo "Imie: $imie  Wiek: $wiek";

}


?>



</body>
</html>