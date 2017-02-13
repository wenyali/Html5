<?php
$place=$_SERVER['DOCUMENT_ROOT']."/book.txt";
echo $place;
$fo=fopen($place,'rb');
//echo fread($fo,filesize("book.txt"));
if(!$fo)
{echo "没有订单信息";
exit;
}
while(!feof($fo))
{
echo fgets($fo,2048).'<br/>';
}
fclose($fo);
?>
