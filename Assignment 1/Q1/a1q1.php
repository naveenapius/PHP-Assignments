<!-- 
1. Input any positive integer ‘n’ which should be less than or equal to 20 using HTML. Call PHP Program to calculate and
print the following :
i.
sum=(1)+(1+2)+(1+2+3)+…………+(1+2+3+….+n).
ii.
product=1*2*3…….*n
iii.
sum1=1-2+3-4+5-……n -->

<?php
function sum($n) {
    //sum = (1) + (1+2) + ...... + (1+2+...+n)
    $var1=0;
    $total=0;
    for($i=1; $i <= $n; $i++){
        $var1 += $i;
        $total += $var1;
    }
    return $total;
}

function product($n) {
    //product = 1*2*...*n
    $total = 1;
    for($i=1; $i <=$n ; $i++) {
        $total *= $i;
    }
    return $total;
}

function sum1($n){
    // sum1=1-2+3-4+5-……n 
    $total=0;
    for($i=1; $i<=$n; $i++) {
        if( $i%2 == 0) {
            $total -= $i;
        }
        else {
            $total += $i;
        }
    }
    return $total;
}

//main
$x  = $_POST['n'];
echo "sum(): ".sum($x)."<br>";
echo "product(): ".product($x)."<br>" ;
echo "sum1(): ".sum1($x)."<br>";
?>