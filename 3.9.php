<html>
<head>
<title>array</title>
</head>
<body>
<?php
$arr=array(15,"string",15);
for($i=0;$i<count($arr);$i++)
{
	$knv=each($arr);
	echo $knv[key].'=>'.$knv[value]."<br>";
}
echo "<br>"."<br>"."<br>";
for($i=0;$i<3;$i++)
{
	echo $arr[$i]."<br>";
}

?>
</body>
</html>
