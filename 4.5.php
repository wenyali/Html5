<html>
<head>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
<title>循环语句</title>
</head>
<body>
<?php
$num=1;
$str="20以内的奇数为:";
echo $str;
while($num<=20)
	{
	if($num % 2 != 0)
	{echo $num."  ";}
	
	$num++;
	}
echo "使用foreach来辨理数组的数值<br>";
$arr=array("one","two","three");
foreach($arr as $key => $value)
{
	echo $key."=>".$value."<br>";
}
?>
</body>
</html>

