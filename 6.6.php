<?php
$room=array('单人床'=>298,'标准间'=>268,'三人间'=>198,'vip套房'=>368);
$roomtype='单人间,标准间,三创建,vip套件';
echo implode('元每天/',$room).'<br/>';
$result=explode(',',$roomtype);
foreach($result as $value)
{
	echo $value.'<br/>';
}
echo print_r($result)."<br/>";
?>
