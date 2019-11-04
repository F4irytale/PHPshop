<?php
session_start();
$username=$_SESSION['username'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$id=$_GET['goodsid'];
$sqlGoods="select * from goods where goods.GoodsID=$id";
$resGoods=$mySQL->query($sqlGoods);
$rowGoods=$resGoods->fetch_array();

$price= $rowGoods['GoodsPrice'];
$img= $rowGoods['img'];
$name= $rowGoods['GoodsName'];
$stock= $rowGoods['GoodsStock'];

$sql="insert into shoppingcart(id,price,num,UserName,img,name,stock)value($id,$price,1,'$username','$img','$name',$stock)";
$res=$mySQL->query($sql);

echo "<script>location='zhuye.php'</script>";

?>