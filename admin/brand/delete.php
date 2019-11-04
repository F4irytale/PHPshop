<?php
$brandID=$_GET['brandID'];
echo $classID;
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="delete from brand where BrandID='$brandID'";

$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('删除失败');location='brandIndex.php'</script>";

}
else
{
echo "<script>location='brandIndex.php'</script>";
}
?>