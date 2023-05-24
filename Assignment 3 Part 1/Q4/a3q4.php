<!-- Write HTML and PHP code to enter
i. 1 input file name
ii. 2 output file names
The PHP program will split input file into 2 output files -->

<?php

function splitData($infile, $outfile1, $outfile2)
{
    $f = fopen($infile, "r");
    $data = fread($f, filesize($infile));
    fclose($f);
    
    $of1 = fopen($outfile1, "w");
    $of2 = fopen($outfile2, "w");
    $split = (strlen($data)/2);
    $outdata1 = substr($data, 0, $split);
    $outdata2 = substr($data, $split);
    fwrite($of1, $outdata1);
    fwrite($of2, $outdata2);
    echo "Split contents of $infile and copied to $outfile1 and $outfile2";
    return;
}

//main
$in = $_POST['in'];
$out1 = $_POST['out1'];
$out2 = $_POST['out2'];
splitData($in, $out1, $out2);
?>