<?php
$user='文压力 李崇红';
$link1="index?user=".urlencode($user)."<br/>";
$link2='index?user='.rawurlencode($user)."<br/>";
echo $link1.$link2;
echo urldecode($link1);
echo urldecode($link2);
echo rawurldecode($link2);
?>
