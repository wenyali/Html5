<html>
<head>
<title>文件的上传</title>
</head>
<body>
<?php
if($_POST['B1']=="上传")
{
	$rand1=rand(0,9);
	$rand2=rand(0,9);
	$rand3=rand(0,9);
	$filename=date("Ymdhms").$rand1.$rand2.$rand3;
	if(empty($_FILES['file']['name']))
	{
		echo "文件名不能为空";
		exit;
	}

	$oldfilename=$_FILES['file']['name'];
	echo '<br/>原文件名为：'.$oldfilename;
	$filetype=substr($oldfilename,strrpos($oldfilename,'.'),strlen($oldfilename)-strrpos($oldfilename,'.'));
	echo "<br/>文件上传的大小为：".$_FILES['file']['size'];
	if($_FILES['file']['size']>1000000)
	{
		echo "<script>alert('上传的文件太大')</script>";
		echo "<script>localtion.href='11.3.php'</script>";
		exit;
	}
	echo "<br/>文件上传服务器后的名为：".$_FILES['file']['tmp_name'];
	$filename=$filename.$filetype;
	echo "<br/>新文件名为：".$filename;
	$savedir=$_SERVER['DOCUMENT_ROOT'].'/load/'.basename($_FILES['file']['name']);
	if(move_uploaded_file($_FILES['file']['tmp_name'],$savedir))
	
	{
		echo "<br/>文件上传成功，保存为：".$savedir;
	}
	else
	{
		echo "<script language=javascript>";
		echo "alert('错误，无法保存文件成功');";
		echo "location.href='11.10.php';</script>";
		exit;
	}
}
?>
</body>
</html>
