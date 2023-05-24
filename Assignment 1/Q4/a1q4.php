<!-- Input two positive integer number<=65535 using HTML. Call PHP program to calculate (i) HCF, (ii) LCM of 2 numbers
LCM = product / HCF
-->

<?php

function hcf($a, $b)
{
    if($b==0)
    {
        return $a;
    }
    return hcf($b, $a%$b);
}

function lcm($a, $b)
{
    return ($a * $b)/hcf($a, $b);
}

//main
$a = $_POST['a'];
$b = $_POST['b'];
echo "HCF of $a and $b: ".hcf($a, $b)."<br>";
echo "LCM of $a and $b: ".lcm($a, $b)."<br>";
?>