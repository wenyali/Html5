<html>
<head>
<title>系统变量</title>

</head>
<body>
<?php
$value0="guest";
$$value0="customer";
echo $guest."<br>";
$guest="feifei";
echo $guest ."<br>";
$value1="xiaoming";
$value2=&$value1;
echo $value1."  ".$value2."<br>";
$value2="lili";
echo $value1."  ". $value2;

?>
</body>
</html>
