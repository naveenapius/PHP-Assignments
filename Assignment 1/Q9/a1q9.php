<!-- Write program in PHP to convert any +ve integer<=32767 to Binary digits. [ Example : 255 :11111111 ] -->

<?php


function toBinary($n)
{
    $bin=array();
    while($n>0)
    {
        $rem = $n%2;
        array_push($bin, $rem);
        $n = (int) ($n/2);
    }
    $bin = array_reverse($bin);
    $b='';
    foreach($bin as $i)
    {
        $b .= strval($i);
    }
    return $b;
}

//main
$x = $_POST['n'];
echo "Binary value of $x: ". toBinary($x);
?>