<html>
<head>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
</head>
<body>
<?php
echo "使用foreach显示:<br>";
$bookedroom=array('201','202','203','204','205','206','207',);
foreach($bookedroom as $key => $value)
{
	echo $key."=>".$value."<br>";
}

echo "使用for循环显示:<br>";
for ($i=0;$i<count($bookedroom);$i++)
{
	echo $bookedroom[$i].'<br>';
}
echo "使用while显示:<br>";
$j=0;
while($j<count($bookedroom))


{
	echo $j.'-'.$bookedroom[$j]."<br>";
	$j++;
}
?>

</body>
</html>
