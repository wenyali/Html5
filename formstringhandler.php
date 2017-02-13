<html>
<head>
<meta charset='gb2312'>
</head>
<body>
<?php

$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$customername=$_POST['customername'];
$gender=$_POST['gender'];
$arrivaltime=$_POST['arrivaltime'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$info=$_POST['info'];
$regex='/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\-\.]+$/';
if(!preg_match($regex,$email))
	{
		echo '这不是一个有效的email地址，请返回上页地址并<a href="form4string.html">重试</a>';
		exit;
	};
if(!preg_match('/^[0-9]$/',$phone)&&(strlen($phone)<=4||strlen($phone)>=15))
	{
		echo '这不是一个有效的电话号码，请返回上页地址并<a href="form4string.html">重试</a>';
		exit;
	};
if($gender=='m')
	{
	$customer='先生';
	}
else
{
	$customer='女士';
}
$message1=  $customername."\t".$customer."\t".$arrivaltime."\t".$phone."\t".$email."\t".$info."\t".date('y m d h: i: s')."\n";
echo $message1;
$place=$_SERVER['DOCUMENT_ROOT'].'/book.txt';
echo $place."<br>";
$fo=fopen($place,'ab');
//echo fread($fo,filesize("book.txt"))."<br/>";
if(fwrite($fo,$message1))
{echo $customername."你的信息已经储存完成 ";}
else
{
	echo "储存有五";
}
fclose($fo);
$r=fopen($place,'r');
echo '<br/>'.fread($r,filesize("book.txt"));
?>
</body>
</html>
