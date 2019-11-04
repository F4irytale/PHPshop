<?php
$goodsID=$_GET['goodsID'];

$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="delete from goods where GoodsID=$goodsID";
echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('删除失败');location='GoodsIndex.php'</script>";

}
else
{
echo "<script>location='GoodsIndex.php'</script>";
}
?>