<?php
$classID=$_GET['classID'];
echo $classID;
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="delete from class where ClassID='$classID'";

$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('删除失败');location='classIndex.php'</script>";

}
else
{
echo "<script>location='classIndex.php'</script>";
}
?>