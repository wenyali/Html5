<?php
abstract class parents{
	public $name;
	public $phone;
	abstract function getname();
	abstract function __construct($name);
}
interface getname{
	define('NAME','和哦诶热河谷哦峨天皇哦');
	function getname();
}
interface getphone{
	function getphone();
}
 class employees extends parents{
	public $name;
	public $phone;
	function __construct($name)
	{
	$this->name=$name;
	}
	function getname()
	{
	return $this->name;
	}
}
class employee2 implements getname,getphone{
	public $name;
	public $phone;
	function __construct($name,$phone)
	{
	$this->name=$name;
	$this->phone=$phone;
	}
	function getname()
	{
	return $this->name;
	}
	function getphone(){
	return $this->phone;
	}
}
$e1=new employees('wenyali');
echo $e1->getname();
echo "<br/>";
$e2=new employee2('lichonghong','678364014');
echo $e2->getname();
echo $e2->getphone();	
?>
