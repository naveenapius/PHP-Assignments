<!-- Write HTML code and PHP program to enter input file name and output file name. Reverse case and copy to 
output file -->


<?php

function changeCase($s)
{
    $chars = str_split($s);
    $data = "";
    foreach($chars as $i)
    {
        if(IntlChar::islower($i))
        {
            $data.=strtoupper($i);
        }
        else
        {
            $data.=$i;
        }
    }
    return $data;
}

function fileCopy($infile, $outfile)
{
    $f = fopen($infile, "r");
    $data = fread($f, filesize($infile));
    fclose($f);

    $f = fopen($outfile, "w");
    $outdata = changeCase($data);
    fwrite($f, $outdata);
    fclose($f);

    echo "Copied data from $infile to $outfile after switching all lowercase letters to uppercase letters<br>";
    return;
}


//main

$in = $_POST['in'];
$out = $_POST['out'];
fileCopy($in, $out);
?>