<!-- Calculate ex = 1+ x + x2 + x3 + x4 + ---------+ xn
                          ---- ---- ----            ----
                           2!   3!   4!              n!
 
where x=0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.8, 0.9, 1.0,.....,2.0
Verify your result with the standard library function of ex
Where n! = 1x2x3x....x n > Write program in PHP. -->


<?php

function factorial($x)
{
    $f=1;
    for($i=1; $i<=$x; $i++)
    {
        $f *= $i;
    }
    return $f;
}

function power($x, $p)
{
    $e = 1;
    for($i=1; $i<=$p; $i++)
    {
        $e *= $x;
    }
    return $e;
}

function exponent($x, $n)
{
    $exp = (1+$x);
    for($i=2; $i <= $n; $i++)
    {
        $exp += (power($x, $i)/factorial($i));
    }
    return $exp;
}


//main
$x=$_POST['x'];
$n=14;
echo "Standard output of e<sup>$x</sup>: ". exp($x)."<br>";
echo "Calculated outpute<sup>$x</sup>: ".exponent($x, $n)."<br>";
?>