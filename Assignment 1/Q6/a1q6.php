<!-- Calculate Tan(x) = Sin(x) / Cos(x) where x = 0 to 360 in step of 5. You have to convert x to radian. Verify your
result with the standard library function of Tan(x).
Sin(x) = x – x3 + x5 - x7 + x9 - ……….
            ----- ----- ---- ----
                3!     5!   7! 9!
Cos(x)= 1 - x2 + x4 - x6 + x8 - …………
            ---- ---- ---- ----
            2! 4! 6! 8!
n! = 1 x 2 x 3 x ……….x n . Write program in PHP. -->
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

function toRadian($x)
{
  return $x*pi()/180;
}

function sine($x, $n)
{
    $ret=$x;
    $flag=0;
    for($i=3; $i <= ($n+1); $i+=2)
    {
        if($flag == 0)
        {
            $ret -= (power($x,$i) / factorial($i));
            $flag++;
        }
        else if($flag == 1)
        {
            $ret += (power($x,$i) / factorial($i));
            $flag--;
        }
    }
    return $ret;
}

function cosine($x, $n)
{
    $ret=1;
    $flag=0;
    for($i=2; $i <= $n; $i+=2)
    {
        if($flag == 0)
        {
            $ret -= (power($x,$i) / factorial($i));
            $flag++;
        }
        else if($flag == 1)
        {
            $ret += (power($x,$i) / factorial($i));
            $flag--;
        }
    }
    return $ret;
}

function tangent($sin, $cos)
{
    return $sin/$cos;
}

//main
$x = $_POST['x'];
$n = 5;
$xrad = toRadian($x);
$s = sine($xrad, $n);
$c = cosine($xrad, $n);
$t = tangent($s, $c);
echo "x in radians: $xrad<br><br>";

echo "Sine: <br>";
echo "Calculated: $s<br>";
echo "Standard Library: ".sin($xrad)."<br><br>";

echo "Cosine: <br>";
echo "Calculated: $c<br>";
echo "Standard Library: ".cos($xrad)."<br><br>";

echo "Tangent: <br>";
echo "Calculated: $t<br>";
echo "Standard Library: ".tan($xrad)."<br><br>";


?>
