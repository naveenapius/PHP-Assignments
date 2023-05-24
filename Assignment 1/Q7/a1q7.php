<!-- Write PHP program to display all 3 digits Triad numbers (n1,n2,n3) where n2=2*n1, n3=3*n1 where n1,n2,n3
contains all digits 1-9 and no digit to be repeated.. [Example: Triad =(192,384,576) ]. -->


<?php

function checkTriad($n)
{   
    $control = array(1,2,3,4,5,6,7,8,9);
    $num_array = array();
    while($n>0)
    {
        array_push($num_array, $n%10);
        $n = intdiv($n,10);
    }
    sort($num_array);
    if($num_array == $control)
    {   
        return 1;
    }
    else
    {
        return 0;
    }
}


function findTriads()
{
    for($i=123; $i<333; $i++)
    {
        $n1 = $i;
        $n2 = $i*2;
        $n3 = $i*3;
        $n = $n1 + ($n2 * 1000) + ($n3 * 1000000);
        if(checkTriad($n) == 1)
        {
            echo "( ".$n1.", ".$n2.", ".$n3." )<br>";
        }
    }
}


//main
echo "Triads:<br>";
echo findTriads();
?>