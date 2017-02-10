<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<title>if语句的使用</title>
</head>
<body>
<?php
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
?>		
</body>
</html>
