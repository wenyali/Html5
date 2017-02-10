<html>
<head>
<meta http-equiv='content-type' content="text/html" charset="utf-8">
<title>switch语句的使用</title>
</head>
<body>
<?php
$num=rand(0,5);
switch($num)
	{
	case 1:
		echo "数值为1";
		break;
	case 2:
		echo "数值为2";
		break;
	case 3:
		echo "数值为3";
		break;
	case 4:
		echo "数值为4";
		break;
	case 5:
		echo "数值为5";
		break;
	default:
		echo "数值不在1和5之间";
	}
?>
</body>
</html>
