
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<?php 
include "../loginlock.php";
?>
<?php
$userName=$_GET['userName'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from users where UserName='$userName'";

$res=$mySQL->query($sql);
if($row=$res->fetch_array())
{

?>
<body>
	<form action="update.php" method='POST'>
	<p>用户名：<input type="text" name='UserName'  value='<?php echo $userName;?>'></p>
	<p>密码：<input type="text" name="Password" value='<?php echo $row['Password']; ?>'></p>
	<p>地址：<input type="text" name="Address" value='<?php echo $row['Address'];?>'></p>
	<p>电话：<input type="text" name="Telephone" value='<?php echo $row['Telephone'];?>'></p>
	<p>昵称: <input type="text" name="NickName" value='<?php echo $row['Nickname'];?>'></p>
	
	 <input type="submit" value="修改">
	</form>

</body>
<?php
}
?>
</html>
