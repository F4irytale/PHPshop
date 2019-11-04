<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from users where UserName='$username' and Password='$password' and IsAdmin=0";
$res=$mySQL->query($sql);
if($row=$res->fetch_array())
{
	$_SESSION['username']=$username;
echo "<script>alert('登录成功');location='../zhuye.php'</script>";
}
else
{
echo "<script>alert('登录失败');location='../login.php'</script>";

}
?>