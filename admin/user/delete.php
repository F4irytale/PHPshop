<?php
$userName=$_GET['userName'];
echo $userName;
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="delete from users where UserName='$userName'";

$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('删除失败');location='userIndex.php'</script>";

}
else
{
echo "<script>location='userIndex.php'</script>";
}
?>