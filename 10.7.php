<?php
function checknum($num)
{
	if($num>1)
	{throw new exception("数值必须小于或者等于1");}
	return true;
}
try
{
checknum(0);
echo "没有异常";
}
catch(exception $e)
{
echo "异常信息".$e->getMessage();
	
}
?>
