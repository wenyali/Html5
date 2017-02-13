<?php
class roomtypes{
	public $customertype;
	private $hotelname='GoodHome';
	protected $roomface='面向所有的人';
	function __construct()
	{
	$this->customertype='everyonefit';
	}
	function telltype(){
		echo "此房间类型为".$this->customertype.'。<br/>';
	}
	function hotelface()
	{ echo "此房间".$this->roomface."。<br/>";}
	function welcomeshow()
	{
	echo "欢迎光临".$this->hotelname."。<br/>";
	}
}
class nonviproom extends roomtypes{
	function __construct(){
	$this->customertype='nonvip';
	}
	function telltype()
	{
	echo "此".__CLASS__."房间类型为".$this->customertype."。<br/>";
	}
	function hotelface()
	{
	echo "此房间不是面向".$this->roomface."。<br/>";
	}
}
class viproom extends roomtypes implements showprice{
	function __construct ()
	{
	$this->customertype='vip';
	}
	function showprice()
	{
	if(__CLASS__=="superviprooms")
	{
	echo "价钱高于500元。<br/>";
	}
	else
	{
	echo "价钱低于500元<br/>";
	}
	}
}
final class superviprooms implements showprice ,showdetail{
	function showprice(){
	if(__CLASS__=="superviprooms")
	{
	echo "价格高于500元<br/>";
	}
	else
	{echo "价格低于500元。<br/>";}
	}
	function showdetail(){
	if(_CLASS_=="superviprooms")
	{
	echo "超级vip可以使用会员卡取得优惠。<br/>";
	}
	else
	{
	echo "不同客户与vip客户不能使用会员卡.<br/>";
	}
	}
}
interface showprice{
	function showprice();
	}
interface showdetail{
	function showdetail();
	}
$room2046=new roomtypes();
$room2046->telltype();
$room2046->hotelface();
$room2046->welcomeshow();
$room1=new nonviproom();
$room1->telltype();
$room1->hotelface();
$room2=new viproom();
$room2->telltype();
$room2->showprice();
$room3=new superviprooms();	
$room3->showprice();
$room3->showdetail();
?>
