<!DOCTYPE html>
<html lang='pl-PL'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Pętle</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
<?php

$i=0;
echo "PĘTLA WHILE <br>";
while($i<100){
    echo $i . " ";
    $i++;   // $i = $i + 1;  $i+=1;  
}

$i=0;
echo "<br><br>PĘTLA DO WHILE <br>";
do{
    echo $i . " ";
    $i++;   // $i = $i + 1;
}while($i<100);

echo "<br><br>PĘTLA FOR <br>";

for($i=0;$i<100;$i++){
    echo $i . " ";   
}

$tablica = array("Adam","Jan","Krzysztof","Paweł","Zbigniew");
echo "<br><br>";

$tablica[1] = "Kamil";
$tablica[5] = "Jan";
$tablica[6] = "Marcin";

foreach($tablica as $imie){
    echo "$imie "; 
}


echo "<br><br>";
for($i=0;$i<count($tablica);$i++){
    echo $tablica[$i] . " "; 
}
echo "<br>LOSOWANIE<BR>";

for($i=0;$i<100; $i++){
    $t[$i] = rand(1000,2000);
    echo "wylosowałem $t[$i]";

}
echo "<br>WyŚWIETLANIE<BR>";
sort($t);
for($i=0;$i<100; $i++){


    echo $i . " " . $t[$i] . "<br> ";
}







?>


</body>
</html>