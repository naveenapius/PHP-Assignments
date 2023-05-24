<!-- Write program in PHP to calculate frequency of each number in a list. Use HTML to input all numbers and then call
php code to calculate frequency of each number. -->

<?php

function frequency($list)
{
    $freq=array();
    foreach($list as $i)
    {
        if(array_key_exists($i, $freq))
        {
            $freq[$i]++;
        }
        else{
            $freq[$i] = 1;
        }
    }
    echo "Value : Frequency<br>";
    foreach($freq as $k => $v)
    {
        echo "$k => $v occurrences<br>";
    }
}

//main
$str = $_POST['s'];
$x = explode(",", $str);
frequency($x);
?>