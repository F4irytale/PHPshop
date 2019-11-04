<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$brandID=$_POST['BrandID'];
$brandDescribe= $_POST['BrandDescribe'];
$brandName= $_POST['BrandName'];
$classID=$_POST['ClassID'];

$sql="update brand  set 
BrandName='$brandName',
BrandDescribe='$brandDescribe' ,
ClassID=$classID
where BrandID=$brandID ";
echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('修改失败');location='brandIndex.php'</script>";

}
else
{
echo "<script>location='brandIndex.php'</script>";
}
?>