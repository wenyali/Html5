<html>
<head><title>静态变量</title></head>
<body>
<?php
$person=20;
function showperson(){
static $person=3;
echo "设置的静态变量的值为:".$person."<br>";
$person++;
echo "此时静态变量的值为：".$person."<br>";
}
showperson();
echo $person."为变量的值"."<br>";
showperson();
?>
</body>
</html>
