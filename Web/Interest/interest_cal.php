<?php

$amount= $_POST["amount"];
$rate= $_POST["rate"];
$year= $_POST["year"];
printf("Initial Amount : %s Bath<br><br>", $amount);
printf("Annual Interest Rate : %s", $rate);
echo " %<br><br>";
printf("Number of Years : %s years<br><br>", $year);
echo "<b>Result</b><br><br>";
for ( $a=1 ; $a<=$year ; $a++ ){
    $amount = $amount * (1+($rate/100));
    printf("Year $a : %s Bath<br><br>", $amount);
}

?>