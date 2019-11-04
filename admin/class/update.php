<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$classDescribe= $_POST['ClassDescribe'];
$className= $_POST['ClassName'];
$classID=$_POST['ClassID'];

$sql="update class  set 
ClassName='$className',
ClassDescribe='$classDescribe' 
 
where ClassID=$classID ";
echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('修改失败');location='classIndex.php'</script>";

}
else
{
echo "<script>location='classIndex.php'</script>";
}
?>