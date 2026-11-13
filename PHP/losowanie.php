<?php
    session_start();

    if(isset($_POST['ile']) && isset($_POST['od'])&& isset($_POST['do'])){
    $ile = $_POST['ile']; 
    $od = $_POST['od'];
    $do = $_POST['do'];

    for($i=0;$i<$ile;$i++){
        $liczby[$i] = rand($od,$do);
        echo $liczby[$i] .  " ";
    }
    $_SESSION['liczby'] = $liczby;

    }
    else{
       
    }
?>

<form method="get">
    <input type="checkbox" hidden checked name="pole" >
    <input type="submit" value="Sortuj">
</form>


<?php

$liczby = $_SESSION['liczby'];
if(isset($_GET['pole']) == true){
$n = 0;
    for($i=0;$i<count($liczby);$i++){
       // echo "<br>i = $i <br>";
                for($j=0;$j<count($liczby)-1 -$i;$j++){
                    $n++;
             //       echo "j = $j ";        
                if($liczby[$j]>$liczby[$j+1]){
                            $tmp = $liczby[$j];
                            $liczby[$j] = $liczby[$j+1];
                            $liczby[$j+1] = $tmp;
                        }
                }
                }
echo "<BR><H1>POSORTOWANE: liczba porównań: $n</H1><BR>";
    for($i=0;$i<count($liczby);$i++){
        echo $liczby[$i] .  " ";
    }

    }

?>