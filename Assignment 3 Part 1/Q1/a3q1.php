<!-- Write a program in HTML and in PHP to copy content of one file to an output file -->

<?php

function copyContent($infile, $outfile)
{
    $f = fopen($infile, "r");
    $data = fread($f, filesize($infile));
    fclose($f);
    $f = fopen($outfile, "w");
    fwrite($f, $data);
    fclose($f);
    printf("Copy to $outfile complete<br>");
    return;
}


//main

$in = "loren.txt";
$out = $_POST['out'];
copyContent($in, $out);
?>