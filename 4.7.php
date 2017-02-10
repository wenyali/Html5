<?php
$n=0;
while(++$n):
	switch($n):
	
	case 1:
		echo "case one ";
		break;
	case 2:
		echo "case two";
		break 2;
	case 3:
		echo 'case three';
		break 1;
	endswitch;
endwhile;
echo "<br>";	
$num=0;
while($num <6):
	$num++;
	if($num==2):
		continue;
	endif;
	echo $num."<br>";
endwhile;

?>
