<!-- Write HTML code and PHP program to enter input file name and output file name
PHP program will convert all characters to bits and write them to an output file
Read the bits and convert two consecutive bits to DNA sequence as
00 = A 
01 = T 
10 = C 
11 = G 
Write the DNA sequence to an output file -->

<?php

function toDNA($bin)
{
    $encoding_chars = str_split($bin, 2);
    $DNA = "";
    foreach($encoding_chars as $i)
    {
        if($i == "00")
        {
            $seq = "A";
        }
        else if($i == "01")
        {
            $seq = "T";
        }
        else if($i == "10")
        {
            $seq = "C";
        }
        else if($i == "11")
        {
            $seq = "G";
        }
        $DNA .= $seq;
    }
    return $DNA;
}


function toBinary($text)
{
    $encoding_chars = str_split($text);
    $bin= "";
    foreach($encoding_chars as $i)
    {
        $a = ord($i);
        $b = decbin($a);
        $bin .= $b;
    }
    return $bin;
}


function transform($infile, $outfile)
{
    //reading text for conversion
    $f = fopen($infile, "r");
    $data = fread($f, filesize($infile));
    fclose($f);

    //converting text to dna sequence
    $bin = toBinary($data);
    $outputstr = toDNA($bin);

    //writing dna sequence to output file
    $f = fopen($outfile, "w");
    fwrite($f, $outputstr);
    fclose($f);

    echo "DNA sequence:<br>$outputstr<br>";
    echo "Sequence copied to $outfile";
}


//main

transform($_POST['in'], $_POST['out']);
?>