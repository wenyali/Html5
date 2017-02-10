<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<title>if语句的使用</title>
</head>
<body>
<?php
echo "随机查找数字:<br>";
$num=rand(1,100);

echo "\$num=".$num;
if($num%2!=0)
	{
		echo "<br>".$num."是奇数";
	}
else
	{
		echo "<br>".$num."是偶数";
	}
echo "<br>";
$d=date("d");
if($d=="fri")
{
	echo "今天是星期五"."<br>";
}else
{
	echo "可惜今天不是星期五<br>";
}
echo "<br>根据成绩判断好坏:<br>";
$goal=rand(20,100);
echo "成绩为：".$goal."<br>";
if($goal>0 && $goal<=60)
	{echo "成绩为差";}
else if($goal>60 && $goal<=80)
	{echo "你的成绩为中等";}
else
	{echo "你的成绩为优秀";}
echo "<br>";
?>		
</body>
</html>
