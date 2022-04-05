<?php
//wap in php to find the remainder without % operator /
//in order to find : modulus in php  you haveto use remainder theoram
//dividend = divisor * quotient 

$x=readline('Enter the x value :');
$y=readline('Enter the y value :');

printf("The division = %d \n",$x/$y);
printf("The division = %f \n",$x/$y);
echo "The division = ";
echo $x%$y;
echo "The remainder  using modulo operator =$rem1";

$Q = $x/$y; //Quotient
$rem2 = $x-($Q*$y);
echo PHP_EOL;
echo "The remainder without modulo operator =$rem2";

?>

///conclusion :since q is complety is divided we can nave get the Answer
