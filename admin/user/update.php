<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$userName= $_POST['UserName'];
$password= $_POST['Password'];
$address= $_POST['Address'];
$telephone= $_POST['Telephone'];
$nickName= $_POST['NickName'];

$sql="update users  set 
Password='$password',
Address='$address',
Telephone='$telephone',
NickName='$nickName'  
where UserName='$userName' ";
echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('插入失败');location='add.php'</script>";

}
else
{
echo "<script>location='userIndex.php'</script>";
}
?>