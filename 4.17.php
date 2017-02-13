<html>
<head>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
</head>
<body>
<?php
$members=null;
function checknumbers($members)
{
	if($members<1)
		{echo "我们不能为少于一人的顾客提供房间";}
	else
		{echo "欢迎来到GODHOME酒店";}
	
}
echo "当有两个顾客时:";
checknumbers(2);
echo '<br>';
echo "当有半个顾客时:";
checknumbers(0.5);
echo '<br>';
function rooms($members)
{
	if($members<1)
		echo "我们不能为少于一个人的顾客提供房间";
	else if($members==1)
		echo "欢迎来到GodHome酒店，我们将为你准备单人房";
	else if($members==2)
		echo "欢迎来到GodHome酒店，我们将为你准备双人房";
	else if($members==3)
		echo "欢迎来到GodHome酒店，我们将为你准备三人房";
	else
		echo "倾电话联系我们，我们将按照具体情况安排合适的房间";
}
rooms(0.4);
echo '<br>';
rooms(2);
echo '<br>';
rooms(3);
echo '<br>';
rooms(5);
echo "<br>";
function switchroom($members)
{
	switch($members){
		case 0:
		echo "我们不能为少于一个人的顾客提供房间";
		break;
		case 1:
		echo "欢迎来到GodHome酒店，我们将为你准备单人房";
		break;
		case 2:
		echo "欢迎来到GodHome酒店，我们将为你准备双人房";
		break;
		case 3:
		echo "欢迎来到GodHome酒店，我们将为你准备三人房";
		break;
		default:
		echo "倾电话联系我们，我们将按照具体情况安排合适的房间";
		break;
	}
}
switchroom(0); echo "<br>";
switchroom(1); echo "<br>";
switchroom(2); echo "<br>";
switchroom(3); echo "<br>";
switchroom(5); echo "<br>";
?>
</body>
</html>
