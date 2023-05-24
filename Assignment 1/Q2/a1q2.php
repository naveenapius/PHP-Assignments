<!-- Input any positive integer number ‘n’ which should be less than or equal to 2000 using HTML. Call PHP Code to print
the following:
(i)Prime number <= n and (ii) Non prime numbers <=n. -->

<?php


function isPrime($n)
{
    //checks if number is prime
    if($n==0 || $n==1)
    {
        return 0;
    }
    for($i=2; $i< $n; $i++)
    {
        if($n%$i == 0)
        {
            return 0;
        }
    }
    return 1;
}


function primeList($n)
{
    //creates array of primes and non primes
    $primes=array();
    $nonprimes=array();
    for($i=0; $i<=$n; $i++)
    {   
        $check=isPrime($i);
        if ($check==1)
        {
            array_push($primes, $i);
        }
        else if($check==0)
        {
            array_push($nonprimes, $i);
        }
    }
    echo "<br>Prime values less than or equal to $n: <br>";
    foreach ($primes as $j)
    {
        echo $j."<br>";
    }
    echo "<br>Non-prime values less than or equal to $n: <br>";
    foreach ($nonprimes as $j)
    {
        echo $j."<br>";
    }
}


//main
primeList($_POST['n']);
?>