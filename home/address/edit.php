<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
$touchID=$_GET['touchID'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from touch where TouchID=$touchID";
$res=$mySQL->query($sql);
if($row=$res->fetch_array())
{
?>
<body>
	<form action="update.php" method='POST'>
	<p>姓名：<input type="text" name="Touchname" value='<?php echo $row['TouchName'];?>'></p>
	<p>地址：<input type="text" name="TouchAddress" value='<?php echo $row['TouchAddress']; ?>'></p>
	<p>电话：<input type="text" name="TouchTelephone" value='<?php echo $row['TouchTelephone']; ?>'></p>
	<p><input type="hidden" name="TouchID" value='<?php echo $row['TouchID']; ?>'></p>
	 <input type="submit" value="修改">
	</form>

</body>
<?php
}
?>
</html>
