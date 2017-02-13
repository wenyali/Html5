<?php
class guest{
public $name;
public $gender;
function __construct($name,$gender)
{
	$this->name=$name;
	$this->gender=$gender;
}
function getname()
{
return $this->name;
}
function getgender()
{
	return $this->gender;
}
}
class child extends guest{
public $age;
public $goal;
}
$lili=new child;
echo $lili->name='lili';
echo $lili->gender='女';
echo $lili->age=28;
echo $lili->goal=30;
$wuwu=new child("wuwu",'女');
echo '<br/>'.$wuwu->getname().'   '.$wuwu->getgender();
?>
