<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
$classID=$_GET['classID'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from class where ClassID=$classID";

$res=$mySQL->query($sql);
if($row=$res->fetch_array())
{

?>
<body>
	<form action="update.php" method='POST'>
	<p>分类名称：<input type="text" name='ClassName'  value='<?php echo $row['ClassName'];?>'></p>
	<p>分类描述：<input type="text" name="ClassDescribe" value='<?php echo $row['ClassDescribe']; ?>'></p>
	<p><input type="hidden" name="ClassID" value='<?php echo $row['ClassID']; ?>'></p>
	
	 <input type="submit" value="修改">
	</form>

</body>
<?php
}
?>
</html>
