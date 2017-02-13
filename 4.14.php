<?php
function total($days,$roomprice)
{
	return $days*$roomprice;
}
	echo total(1,3);
echo "函数的引用<br>";
function &example($aa=1)
{
	return $aa;
}
$bb= &example(" i love ypu");
echo $bb;
echo '<br>取消变量的引用';
$num=100;
$num2=&$num;
echo "\$num1=".$num;
echo "<br>\$num2引用\$num1的数值为:".$num2;
unset($num2);
echo "<br>\$num2接触对\$num1的引用后的数值为:".$num2."<br>";

?>
