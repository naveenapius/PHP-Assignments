<!-- Write HTML code to input file name which contains the following fields separated by comma:
Name, paper1 marks(100), paper2 marks(100), paper3 marks(100)
Write php program which will read the input file and extract alll data and calculate the following:
total = paper1 + paper2 + paper3
average = total/3 
division=1/2/3F depending on average
Display all the data in tabular form on the screen. Write the data into a file -->

<?php
function extractData($file)
{
    $f = fopen($file, "r");
    $raw = explode("\n",fread($f, filesize($file)));
    $data = array();
    foreach($raw as $i)
    {
        $in = explode(",", $i);
        array_push($data, $in);
    }
    return $data;
}

function getDiv($n)
{
    if($n>80)
    {
        return "1";
    }
    if($n>60)
    {
        return "2";
    }
    if($n>40)
    {
        return "3";
    }
    else
    {
        return "F";
    }
}

function processData($data, $outfile)
{
    $f = fopen($outfile, "a");
    echo "<table border=1>
    <tr>
        <th>Name</th>
        <th>Paper 1</th>
        <th>Paper 2</th>
        <th>Paper 3</th>
        <th>Total</th>
        <th>Average</th>
        <th>Division</th>
    </tr>";
    foreach($data as $i)
    {
        $name = $i[0];
        $p1 = (int)$i[1];
        $p2 = (int)$i[2];
        $p3 = (int)$i[3];
        $total = $p1 + $p2 + $p3;
        $avg = $total / 3;
        $div = getDiv($avg);
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$p1</td>";
        echo "<td>$p2</td>";
        echo "<td>$p3</td>";
        echo "<td>$total</td>";
        echo "<td>$avg</td>";
        echo "<td>$div</td>";
        echo "</tr>";
        $outstr = "$name,$p1,$p2,$p3,$total,$avg,$div\n";
        fwrite($f, $outstr);
    }
    echo "</table>";
    echo "<br>Data copied to $outfile";
}

//main
processData((extractData($_POST['in'])), $_POST['out']);
?>