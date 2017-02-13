<?php
if(!$_GET['u'])
	{echo '用户还没有输入!';}
else
{
	switch($_GET['u'])
		{
			case 1:
				echo "用户是文压力";
				break;
			case 2:
				echo "用户是李崇红";
				break;
		}
}
?>
