<?php
abstract class myobject{
	abstract function service($getname,$price,$num);
}
class mybook extends myobject{
	function service($getname,$price,$num)
	{
		echo "购买的商品是：".$getname.',商品的价格是：'.$price.',购买商品的数量是：'.$num;
	}
}
class mycomputer extends myobject{
	function service($getname,$price,$num)
	{
		echo "购买的商品是：".$getname.',商品的价格是：'.$price.',购买商品的数量是：'.$num;
		
	}
}

$book=new mybook();
 $book->service('愁小雅','20','30');
$computer=new mycomputer();
 $computer->service('愁小雅','20','30');

?>
