<?php
session_start();
$username = $_SESSION['username'];
$value = $_POST['select'];
echo $value;
$price=$_POST['over_price'];
echo $price;
$date = date("Y-m-d h:i:sa");
$text1=$_POST['name'];
for($i=0;$i<count($text1);$i++) 
{ 
	$yourwant = $text1[$i];
	echo $yourwant;
	$mySQL1=new mysqli('localhost','root','','shop',3306);
	$mySQL1->set_charset('utf8');
	$sql1="select * from shoppingcart where UserName='$username'";
	$res1=$mySQL1->query($sql1);
	
	while($row=$res1->fetch_array())
		{
			$name = $row['name'];
			$goodsid = $row['id'];
			$num = $row['num'];
			$sql2 = "INSERT INTO orders(`TouchID`, `name`, `price`, `OrdersTime`, `UserName`, `GoodsID`,`Counts`,`StatusID`) VALUES ($value,'$name',$price,'$date','$username',$goodsid,$num,2)";
			$res2=$mySQL1->query($sql2);
			print_r($res2);
			$stock=$row['stock']-$row['num'];
			$sql3 = "UPDATE goods SET GoodsStock = '$stock' WHERE GoodsID = $goodsid";
			$res3=$mySQL1->query($sql3);
			$sql4 = "DELETE FROM shoppingcart WHERE id = $goodsid";
			$res4=$mySQL1->query($sql4);
		}
		echo "<script>location='shopcar.php'</script>";
}
?>