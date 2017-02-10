<?php
$arr[0][0]=1;
$arr[0][1]=2;
$arr[1][0]=3;
$arr[1][1]=4;
for($i=0;$i<count($arr);$i++)
{
	
		$k=each($arr);
	for($j=0;$j<count($arr[$i]);$j++)
	{
		$knv=each($arr[$i]);
		echo $k[key].$knv[key].'=>'.$knv[value]."<br>";
	}
}
?>
