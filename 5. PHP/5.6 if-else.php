<?php

$number1 = 30.5;
$number2 = 40.0;
$is_passed = true;


$total_number = $number1 + $number2;
$average = $total_number / 2;

echo "Average is: " . $average . " - ";

if ( $average > 40 ){
	echo "Result : Passed";
}else{
	echo "Result : Failed";
}


?>