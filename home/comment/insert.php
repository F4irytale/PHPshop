<?php
session_start();
$username=$_SESSION['username'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$cdescribe= $_POST['Cdescribe'];
$content= $_POST['Content'];
$goodsID= $_POST['GoodsID'];

$sql="insert into comment(Content,GoodsID,Cdescribe,UserName)
 values('$content','$goodsID','$cdescribe','$username')";
echo $sql;
$res=$mySQL->query($sql);
echo $res;
if($res==false)
{
	echo "<script>alert('插入失败');location='add.php'</script>";

}
else
{
echo "<script>location='commentIndex.php'</script>";
}
?>
