<?php
session_start();
$username=$_GET['username'];
$password=$_GET['password'];

$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from users where UserName='$username' and Password='$password' and IsAdmin=1";
$res=$mySQL->query($sql);
if($row=$res->fetch_array())
{
	$_SESSION['username']=$username;
echo "<script>alert('登录成功');location='index.php'</script>";
}
else
{
echo "<script>alert('登录失败');location='Login.html'</script>";

}
?>