<!-- Write a program in HTML to type input file name and output file name. After pressing submit button
it will call a php program which will reverse the contents of the file and write the reversed data into 
an output file -->

<?php

function revCopy($infile, $outfile)
{
    $f1 = fopen($infile, "r");
    $data = fread($f1, filesize($infile));
    fclose($f1);
    
    $f2 = fopen($outfile, "w");
    fwrite($f2, strrev($data));
    fclose($f2);
    echo "Successfully copied reversed data from $infile to $outfile<br>";
    return;
}


//main
$in = $_POST['in'];
$out = $_POST['out'];
revCopy($in, $out);
?>