<?php

$x = explode(' ', fgets(STDIN));

$A = floatval($x[0]);

$B = floatval($x[1]);

$C = floatval($x[2]);

$D = floatval($x[3]);



if($B>$C&$D>$A&($C+$D)>($A+$B)&$C>=0&$D>=0&$A%2==0){
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}

?>