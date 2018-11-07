<?php

$name= $_POST["name"];
$height= $_POST["height"];
$weight= $_POST["weight"];
$bmi = $weight/(($height/100)*($height/100));
printf("Name : %s<br><br>", $name);
printf("Height : %s cm<br><br>", $height);
printf("Weight : %s kg<br><br>", $weight);
echo "<b>Status</b><br><br>";
printf("BMI : %.2f<br><br>", $bmi);
if($bmi < 18.5){
    echo "BMI Categories: Underweight";
}
elseif($bmi < 24.9){
    echo "BMI Categories: Normal Weight";
}
elseif($bmi < 29.9){
    echo "BMI Categories: Overweight";
}
else{
    echo "BMI Categories: Obesity";
}

?>