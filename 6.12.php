<?php
$room=array('单人床','标准间','三人间','vip套房');
$str=serialize($room);
echo  $str."<br/>";
$arr=unserialize($str);
print_r($arr).'<br/>';
echo unset($room);
foreach($room as $value)
{

	echo $value."<br/>";
}
?>
