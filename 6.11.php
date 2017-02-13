<?php
$room=array('单人床'=>298,'标准间'=>268,'三人间'=>198,'vip套房'=>368);
$roomtype=array('单人间','标准间','三创建','vip套件');
$int=array(1,2,3,4);
if(array_key_exists('单人床',$room))
	{echo "有单人床<br/>";}
if(array_search('298',$room))
	{echo "有298 的床<br/>";}
if(in_array('标准间',$roomtype))
{
	echo "标准间";
}
print_r(array_keys($room)).'<br/>';
print_r(array_values($roomtype)).'<br/>';
echo count($room).'<br/>';
print_r( array_count_values($room))."<br/>";
?>
