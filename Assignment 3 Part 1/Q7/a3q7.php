<!-- Write HTML code and also a PHP program to enter input file name and also output file name.
The PHP program will extract all words from input file and then display on screen 
It will also write the words into an output file
The program should also display how many words were extracted -->

<?php

function wordExtract($infile, $outfile)
{
    $f = fopen($infile, "r");
    $data = fread($f, filesize($infile));
    fclose($f);
    $words = explode(" ", $data);
    $word_count = sizeof($words);
    $outdata = "";
    echo "Words in file: <br>";
    foreach($words as $i)
    {
        $outdata .= ($i."\n");
        echo "$i<br>";
    }
    echo "<br>Number of words in file: $word_count<br>";

    $f = fopen($outfile, "w");
    fwrite($f, $outdata);
    fclose($f);

    echo "<br>Words from $infile have been written into $outfile<br>";
}


//main

$in = $_POST['in'];
$out = $_POST['out'];
wordExtract($in, $out);
?>