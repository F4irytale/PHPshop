<?php
session_start();
$username = $_SESSION['username'];
$id=$_GET['id'];
$mySQL=new mysqli('localhost','root','','shop',3306);
	$mySQL->set_charset('utf8');
	$sql="select *  from shoppingcart where id=$id";
	$res=$mySQL->query($sql);
	$row=$res->fetch_array();
	if($row['num']>0){
		$newnum = $row['num']-1;
	$sql2="UPDATE shoppingcart SET num = $newnum WHERE id = $id AND UserName='$username'";
	$res=$mySQL->query($sql2);
	 echo "<script>location='shopcar.php'</script>";
	}else {
		 echo "<script>location='shopcar.php'</script>";
	}
	

?>