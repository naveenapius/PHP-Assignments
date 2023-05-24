<!-- Write HTML code, PHP program to enter input filename and output file namespace
The PHP code will extract all text characters and transfer them to output file
Display them on the screen 
Count number of text characters -->

<?php

function getChars($inputfile)
{
    $f = fopen($inputfile, "r");
    $data = str_split(fread($f, filesize($inputfile)));
    fclose($f);
    return $data;
}

function textFilter($infile, $outfile)
{
    $chars = getChars($infile);
    $outdata="";
    $count = 0;
    foreach($chars as $i)
    {
        if(ord($i)>=32 && ord($i)<=122)
        {
            echo "$i<br>";
            $outdata .= ($i."\n");
            $count++;
        }
    }

    echo "Number of text characters: $count<br>";

    $f = fopen($outfile, "w");
    fwrite($f, $outdata);
    fclose($f);
    echo "Text from $infile written to $outfile";
    return;
}

//main
textFilter($_POST['in'], $_POST['out']);

?>