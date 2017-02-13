<?php
if(isset($_POST['email']))
{
	$email=$_POST['email'];
}
echo $email;
function checkemail($em){
if(!preg_match("/^[a-zA-Z0-9\.\-_]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/",$em))
{
	throw new Exception("这不是一个正确的email地址");
}
return true;
}
try
{
checkemail($email);
echo "这是一个正确的email地址";
}
catch(Exception $e)
{
	echo $e->getMessage();
}
?>
