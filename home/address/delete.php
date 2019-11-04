<?php
$touchID=$_GET['touchID'];
echo $touchID;
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="delete from touch where TouchID='$touchID'";

$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('删除失败');location='address-list'</script>";

}
else
{
echo "<script>location='address-list.php'</script>";
}
?>