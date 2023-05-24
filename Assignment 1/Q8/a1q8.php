
<!-- Write a program in PHP to implement Towers of Hanoi problem to shift ‘n’ disks from 
Peg-1 to Peg-2 using Peg-3. -->
<?php
function hanoi($p1, $p2, $p3, $nd)
{
	global $n;
	if ($nd == 1)
	{
		$n++;
		echo "Move Disk ".$nd." from peg ".$p1." to ".$p2."<br>";
		return;
	}
	hanoi($p1, $p3, $p2, $nd-1);
	$n++;
	echo "Move Disk ".$nd." from peg ".$p1." to ".$p2."<br>";
	hanoi($p3, $p2, $p1, $nd-1);
}


//MAIN
$nd=$_POST['n'];
$n=0;
hanoi('1','2','3', $nd);
echo "Total number of movements made for ".$nd." disks: ".$n."<br>";
?>
