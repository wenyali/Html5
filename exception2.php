<?php
class customException extends Exception
{
	function erroMessage()
	{
	$echoMSG= "错误消息的行:".$this->getLine()."in".$this->getFile().'<b>'.$this->getMessage().'</b>不是一个有效的邮箱地址';
	return $echoMSG; 
	}
}
$email='ireuir@yahoo.com';
$email2="huirelhaflirhgl@qq.com";
try
{
	if(!preg_match("/^[a-z]+@[a-z]+\.[a-z]+$/",$email2))
	{
		throw new customException();
	}
	else
	{
	echo "这是一个邮箱地址";
	}
	if(strpos($email,"yahoo")!==FALSE)
	{
		throw new Exception($email2."是一个雅虎邮箱");
	}
	else
	{
		echo "<br/>但不是雅虎邮箱";
	}
}
catch(customException $e)
{
	echo $e->erroMessage();
}
catch(Exception $e)
{
echo $e->getMessage();
}
?>
