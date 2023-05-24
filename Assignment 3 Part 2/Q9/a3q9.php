<!-- Write HTML code to type input file name,output file name and pattern to be searched as well as
new pattern to be replaced.
Call PHP program which will replace old pattern by new pattern
Write modified data into output file
Program should display number of occurrences of the pattern -->


<?php

function patternReplace($infile, $outfile, $searchpat, $outpat)
{
    $f = fopen($infile, "r");
    $inputstr = fread($f, filesize($infile));
    fclose($f);
    $data = explode($searchpat, $inputstr);
    $out ="";
    $length = sizeof($data)-1;
    for($i=0; $i<($length); $i++)
    {
        $out .= ($data[$i].$outpat);
    }

    if(end($data)!="")
    {
        $out .=($data[$length]);
    }

    echo "Number of occurrences of $searchpat: ".($length)."<br>";

    //writing output pattern to file
    $f = fopen($outfile, "w");
    fwrite($f, $out);
    fclose($f);
    echo "Modified string written to $outfile<br>";
}

$in = $_POST['in'];
$out = $_POST['out'];
$search = $_POST['search'];
$replace = $_POST['replace'];

patternReplace($in, $out, $search, $replace);


?>