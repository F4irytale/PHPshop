<?php 
session_start();
$dir=$_SERVER['PHP_SELF'];
$arr=explode('/', $dir);
$root=$arr[1];

 if(!$_SESSION['username'])
{
	echo "<script>location='/$root/admin/Login.html'</script>";
	exit;

}
?>