<!-- Write HTML code to input name,email,mobile number of a person and call a PHP program
to write the data to an output file. The program should also display the current contents of the output file -->

<?php

function appendRecord($outstring, $file)
{
    $f = fopen($file, "w");
    fputcsv($f, $outstring);
    fclose($f);
    echo "<br>Written data to $file<br>";
    return;
}

function inputData($filename, $name, $email, $mob)
{
    
    $outstr = "$name,$email,$mob";
    echo $outstr;
    //appending data to file
    appendRecord($outstr, $filename);
}


function displayRecords($filename)
{
    $f = fopen($filename, "r");
    $data = explode("\n",fread($f, filesize($filename)));
    echo "Current data available: <br>";
    foreach($data as $i)
    {
        echo $i."<br>";
    }
    return;
}

//main
$name = $_POST['name'];
$email = $_POST['email'];
$mob = $_POST['mob'];
inputData("bio.csv", $name, $email, $mob);
displayRecords("bio.csv");
?>