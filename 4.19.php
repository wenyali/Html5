<html>
<head>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
</head>
<body>
<?php
$email1="wangxiaoming2011@hotmail.com";
$email2="the email is liuxiaoming_2011@hotmail.com";
$asemail="this is wangxiaoming2012@hotmail";
$regex='/^[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$/';
$regex2='/[a-zA-Z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9.]+$/';
if(preg_match($regex,$email1,$a))
	{
		echo "this is a email.";
		print_r($a);
		echo '<br>';
	}
if(preg_match($regex2,$email2,$b))
{
	echo "this is a email";
	print_r($b);
		echo '<br>';
}
if(preg_match($regex,$asemail))
{
	echo 'this is a email';
}
else
{
	echo 'this is not a email';
}
echo "<br/>";
$url="http://www.google.com";

$regex2="|(http://)([a-zA-Z0-9-_.]+)|";
$result=preg_replace($regex2,'<a href=\"\\0\">\\0</a>',$url);
echo $result;
echo '<br/>';
$string="hello world. beautiful day tody.";
$token=strtok($string," ");
print_r($token);

echo gettype($token);
while($token!==false)
{
	echo $token ."<br/>";
	$token=strtok(" ");
}
?>


</body>
</html>
