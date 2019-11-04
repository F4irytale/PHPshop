<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$nickName= $_POST['NickName'];
$userName= $_POST['UserName'];
$telephone= $_POST['Telephone'];
$email= $_POST['Email'];
$password= $_POST['Password'];
$province=$_POST['province'];
$city=$_POST['city'];
$country=$_POST['country'];
$village=$_POST['village'];
$street=$_POST['street'];
$other=$_POST['other'];
$address=$province.$city.$country.$village.$street.$other;
$sql="insert into users(NickName,UserName,Telephone,Email,Password,Address) values('$nickName','$userName',$telephone,'$email','$password','$address')";
$res=$mySQL->query($sql);
if($res==false)
{
	echo '{"ayok":0}';
}
else
{
echo '{"ayok":1}';
}
?>