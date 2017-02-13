<?php
$name=$_POST['name'];
echo $name."<br/>";
if(isset($_POST['achecked']))
{$achecked=$_POST['achecked'];}
if(isset($_POST['bchecked']))
{$bchecked=$_POST['bchecked'];}
if(isset($_POST['cchecked']))
{$cchecked=$_POST['cchecked'];}
if(isset($achecked) and $achecked==1)
{
	echo "选项A的value数值被正确传递<br/>";
}
if(isset($bchecked) and $bchecked==2)
{
	echo "选项B的value数值被正确传递<br/>";
}
if(isset($cchecked) and $cchecked==3)
{
	echo "选项C的value数值被正确传递<br/>";
}
if(isset($_POST['lantian']))
{$lantian=$_POST['lantian'];}
if(isset($lantian) and $lantian=='l')
{
	echo "蓝天<br/>";
}
if(isset($lantian) and $lantian=='b')
{ echo '白云<br/>';}
if(isset($lantian) and $lantian=='d')
{ echo '大海<br/>';}
$place=$_POST['place'];

if(isset($place) and $place==1)
{ echo "海南<br/>";}
if(isset($place) and $place==2)
{ echo "南京<br/>";}
if(isset($place) and $place==3)
{ echo "广东<br/>";}
if(isset($place) and $place==4)
{ echo "上海<br/>";}
if(isset($place) and $place==5)
{ echo "北京<br/>";}
?>
