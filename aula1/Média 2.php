<?php 

$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);


$MEDIA= number_format(($A*2+$B*3+$C*5)/10,1,".","");

echo "MEDIA = $MEDIA\n"

?>