<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$brandName= $_POST['BrandName'];
$brandDescribe= $_POST['BrandDescribe'];
$classID=$_POST['ClassID'];

$sql="insert into brand(BrandName,BrandDescribe,ClassID) values('$brandName','$brandDescribe','$classID')";
echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('插入失败');location='add.php'</script>";

}
else
{
echo "<script>location='brandIndex.php'</script>";
}
?>