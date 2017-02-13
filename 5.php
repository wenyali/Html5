<?php
class guests{
private $name;
private $gender;
function setname($name)
{
	$this->name=$name;
}
function getname(){
	return $this->name;
}
function setgender($gender)
{
	$this->gender=$gender;
}
function getgender()
{
	return $this->gender;
}
}
$lili=new guests();
$name1=$lili->setname('lili');
echo $lili->getname();
$gender=$lili->setgender('女');
echo $lili->getgender();
?>
