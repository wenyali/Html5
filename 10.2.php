<?php
function error($errno,$errstr)
{
echo "错误[".$errno.']'.$errstr."<br>";
echo "错误记录法比结束";
error_log("错误[".$errno."]".$errstr,1,"2917073217@qq.com","from:wenyali");
}
set_error_handler('error',E_USER_WARNING);
//echo $text;
$num=5;
if($num>4)
{
	trigger_error("value must be 4 or below",E_USER_WARNING);
}
?>
