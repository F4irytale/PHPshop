<?php
session_start();
$id=$_GET['id'];
$mySQL=new mysqli('localhost','root','','shop',3306);
	$mySQL->set_charset('utf8');
	$sql="delete from shoppingcart where id=$id";
	$res=$mySQL->query($sql);
echo "<script>location='shopcar.php'</script>";
?>