<html>
<head>
<title></title>
</head>
<body>
<?php
$room=20;
$room2=30;
function showrooms(){
	global $room;	
	echo $room;
	}
function showrooms2(){
	$room2=$GLOBALS['room2'];
	echo $room2;
}
showrooms();
echo"<br>";
showrooms2();
echo "<br>";
echo $room ."间房子";
?>

</body>
</html>
