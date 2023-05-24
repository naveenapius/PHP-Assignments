<!-- Write HTML and PHP code to enter input file name and output file namespace
The PHP program will extract each character from the file and display 
(i) Character posix_getlogin
(ii) Character
(iii) ASCII
It should also transfer this data to the output file.
Do not print characters with ASCII code 9,10,11,12,13 -->


<?php

function getChars($inputfile)
{
    $f = fopen($inputfile, "r");
    $data = str_split(fread($f, filesize($inputfile)));
    fclose($f);
    return $data;
}

function mapASCII($chars)
{
    $data=array();
    foreach($chars as $i)
    {
        $data[$i] = ord($i);
    }
    return $data;
}

function manipulate($infile, $outfile)
{
    $chars = getChars($infile);
    $ascii = mapASCII($chars);
    $index=-1;
    $outdata = "char, index, ascii\n";
    $notA = array(9, 10, 11, 12, 13);
    foreach($chars as $i)
    {
        $index++;
        $a = $ascii[$i];
        if(!(in_array($a, $notA)))
        {
            $outstr = "$i    | Index: $index   ASCII: $a";
            echo $outstr."<br>";
            $outdata .= "$i, $index, $a\n";
        }
    }
    $f = fopen($outfile, "w");
    fwrite($f, $outdata);
    fclose($f);
    echo "Data written to $outfile<br>";
    return;
}

manipulate($_POST['in'], $_POST['out']);
?>

