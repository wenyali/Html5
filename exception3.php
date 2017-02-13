<?php
$DOCUMENT_ROOT= $_SERVER['DOCUMENT_ROOT'];
echo $DOCUMENT_ROOT."<BR/>";
@$fp=fopen($DOCUMENT_ROOT."/book.txt",'rb');
echo fread($fp,filesize("book.txt"));
try
{
if(!$fp)
{throw new Exception("文件路径有五或者找不到文件");}
}
catch(Exception $e)
{
echo $e->getMessage()."<br/>";
echo "在文件".$e->getFile()."的第".$e->getLine().'行。<br/>';
}
@fclose($fp);
?>
