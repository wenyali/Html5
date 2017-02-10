<?php
$min=1;
$max=10;
$arr[][]=array();
$arr[0][0]=1;
for($i=1;$i<$max;$i++):
	for($j=0;$j<=$i;$j++):
		if($j==0 || $j==$i):
			$arr[$i][$j]=1;
		else:
			$arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
		endif;
	endfor;
endfor;
foreach($arr as $value):
	foreach($value as $vl)
		echo $vl.'         ';
	echo "<br>";
endforeach;
?>
