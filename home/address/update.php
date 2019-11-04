<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$touchName= $_POST['Touchname'];
$touchAddress= $_POST['TouchAddress'];
$touchTelephone= $_POST['TouchTelephone'];
$touchID= $_POST['TouchID'];

$sql="update touch  set 
TouchName='$touchName',
TouchAddress='$touchAddress',
TouchTelephone='$touchTelephone'

where TouchID=$touchID";
$res=$mySQL->query($sql);
echo $res;
if($res==false)
{
	echo "<script>alert('修改失败');location='address-list.php'</script>";

}
else
{
	echo "<script>location='address-list.php'</script>";
}
?>