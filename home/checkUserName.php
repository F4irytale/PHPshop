<?php
header('Content-Type:application/json;charset=utf-8');
$username=$_POST['username'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');$sql="select * from users where UserName='$username'";
$res=$mySQL->query($sql);
if($row=$res->fetch_array())
{
// 	$result= '{"success":true,"msg":"员工找到了"}';
// echo $result;
echo '{"status":0,"message":"用户名已存在","role":"管理员"}';
	// echo "{'status':1,'message':'员工存在','role':'管理员'}";

}
else
{
// 	$result= '{"success":false,"msg":"员工没找到"}';
// echo $result;
	echo '{"status":1,"message":"","role":""}';
	// echo "{'status':0,'message':'员工不存在','role':'管理员'}";
}

?>