<?php
return;
$room=array(
		array(
			'type'=>'单人床',
			'info'=>'此房间为单人单间',
			'price_per_day'=>298
			),
		array(
			'type'=>'标准间',
			'info'=>'此房间为两二人配置',
			'price_per_day'=>268
			),
		);
foreach($room as $key)
{
	foreach($key as $value)
		{
		echo $value."<br/>";
		}
}
?>
