<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasza nowa strona2</title>
</head>
<body>

<?php

$liczba_calkowita = 12;
$zmiennoprzecinkowa = 24.5;
$tekst = "Dzień dobry";
$logiczny = true;

$tablica = array(12,123,34);

$tablica1[0] = "Adam";
$tablica1[1] = "Jan";
$tablica1[2] = "Krzysztof"; 

echo "<h1>Witaj Świecie</h1>";

echo $tekst;
echo $liczba_calkowita;

echo "<br>Liczba jest równa: " . $liczba_calkowita;
echo "<br>Liczba jest równa: $liczba_calkowita";
print ("<br>Liczba jest równa: $liczba_calkowita");
echo "<br><br>Liczba jest równa: " . $liczba_calkowita . " a liczba 
       zmiennoprzecinkowa jest równa: " . $zmiennoprzecinkowa;

echo "<br><hr>";

echo $tablica[0] . " " . $tablica[1] . " " . $tablica[2];


echo "<br><hr>";

echo $tablica1[0] . " " . $tablica1[1] . " " . $tablica1[2];

echo "Zmienna logiczna ma wartość: $logiczny";

$liczba = 6;

if($liczba > 5){
    echo "<br>liczba większa od 5";
}
//Jednolinijkowy

/* operatory porównania

    !=    - różne
    !==   - różne i różnego typu
    ==    - czy jest równe
    ===   - czy jest równe i tego samego typu
    >     - więszy
    <     - mniejszy
    >=    - więszy bądź równy
    <=    - mniejszy bądź równy
*/


if($liczba > 4){
    echo "<br>liczba większa od 4";
    }
    elseif($liczba < 4)
        {
         echo "<br>liczba mniejsza od 4"; 
         }
        else{
            echo "Liczba równa 4";
            }
echo "<br><br>";
    $liczba1 = 5;
    $liczba2 = "5";

    if($liczba1 == $liczba2){
        echo "liczby równe";
    }else{
        echo "liczby różne";
    }
echo "<br><br>";
      if($liczba1 === $liczba2){
        echo "liczby równe";
    }else{
        echo "liczby różne";
    }

    /*operatory arytmetyczne
    +
    -
    *
    /
    % - reszta z dzielenia całkowitego

    */

    /*operatory logiczne

    && lub and - i logiczne
    || lub or - lub logiczne
    ! - negacja 
*/

$zm1 = -5;
$zm2 = 10;

if($zm1>0 && $zm2>0){
    echo "<br>obydwie zmienne większe od 0";
}

if($zm1>0 || $zm2>0){
    echo "<br>przynajmniej jedna zmienna większa od 0";
}

$zmienna_a = 5;
$zmienna_b = 2;
$zmienna_w = $zmienna_a / $zmienna_b;

echo "Wynik to $zmienna_w";


?>

</body>

</html>