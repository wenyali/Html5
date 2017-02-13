<?php
$d1=getcwd();
echo $d1."<br/>";
$file1=scandir($d1);
$file2=scandir($d1,1);
foreach ($file1 as $key=>$value)
{
echo $key."=>".$value."<br/>";
}
foreach ($file2 as $key=>$value)
{
echo $key."=>".$value."<br/>";
}
?>
