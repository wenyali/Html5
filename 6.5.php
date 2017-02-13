<?php
$room=array('单人床'=>298,'标准间'=>268,'三人间'=>198,'vip套房'=>368);
foreach($room as $price)
{
	echo $price.'<br/>';
}
sort($room);
foreach($room as $type => $price)
{
	echo $type.':'.$price."<br/>";
}
reset($room);
while($price=each($room))
	{
		echo $price['value'].'<br/>';
	}
reset($room);
while(list($type,$price)=each($room))
{
	echo $type.'-'.$price.'<br/>';
}
?>
