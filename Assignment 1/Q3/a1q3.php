<!-- Input any (1-999999999) digit positive integer number using HTML Form and call a PHP code to calculate sum of the
digits of the given number. -->

<?php

function digitSum($n)
{
    $sum=0;
    while($n>0)
    {
        $rem = $n%10;
        $sum += $rem;
        $n = intdiv($n, 10);
    }
    return $sum;
}


//main
$n = $_POST['n'];
echo "Sum of digits in $n: ".digitSum($n);
?>