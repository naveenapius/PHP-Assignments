<!-- Write a program in html and in php to input 2 input file names and 1 output file names. Copy the 
contents of the input files into the output file -->

<?php

function copy2Content($infile1, $infile2, $outfile)
{
    $f1 = fopen($infile1, "r");
    $f2 = fopen($infile2, "r");
    $data1 = fread($f1, filesize($infile1));
    $data2 = fread($f2, filesize($infile2));
    $data = $data1.$data2;
    fclose($f1);
    fclose($f2);

    $f = fopen($outfile, "w");
    fwrite($f, $data);
    echo "Copied contents of $infile1 and $infile2 to $outfile<br>";
    fclose($f);
    return;
}

//main

$i1 = $_POST['i1'];
$i2 = $_POST['i2'];
$o = $_POST['o'];
copy2Content($i1, $i2, $o);
?>