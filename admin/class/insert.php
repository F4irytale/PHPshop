<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$className= $_POST['ClassName'];
$classDescribe= $_POST['ClassDescribe'];


$sql="insert into class(ClassName,ClassDescribe) values('$className','$classDescribe')";
echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('插入失败');location='add.php'</script>";

}
else
{
echo "<script>location='classIndex.php'</script>";
}
?>