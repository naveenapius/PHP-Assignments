<!-- Write HTML code and PHP program to enter 1 input file name and 1 output file name. The PHP program 
will remove all comments from the input file and write modified data into the output file
The program should display how many comment lines were removed from the input file.
Languages to be considered:
C   //
C++ //
Java //
PHP //
Python #
Bash #
-->


<?php

function readLines($infile)
{
    $f = fopen($infile, "r");
    $data = explode("\n", fread($f, filesize($infile)));
    fclose($f);
    return $data;
}

function checkComment($infile, $outfile)
{
    $data = readLines($infile);
    $outdata = "";
    $comment_count = 0;
    foreach($data as $i)
    {   echo strpos($i, "//");
        if((strpos(" ".$i, "//")==NULL) && (strpos(" ".$i, "#")==NULL))
        {   
            $outdata .= ($i."\n");
        }
        else 
        {   
            $comment_count++; 
        }
    }

    $f = fopen($outfile, "w");
    fwrite($f, $outdata);
    fclose($f);

    echo "Number of comment lines removed: $comment_count<br>";
    echo "Data from $infile written to $outfile without comment lines<br>";
}

//main
$in = $_POST['in'];
$out = $_POST['out'];
checkComment($in, $out);
?>
