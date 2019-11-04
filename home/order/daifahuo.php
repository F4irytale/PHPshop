<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>待付款</title>
</head>
<body>
	<table>
		<?php
	session_start();
		$mySQLi=new mysqli('localhost','root','','shop',3306);
        $mySQLi-> set_charset('utf8'); 
      if(isset($_SESSION['username']))
      {
      	$sql="select orders.*,goods.* from orders,goods where orders.GoodsID=goods.GoodsID and orders.UserName='".$_SESSION['username']."' and orders.StatusID=2";
		 
		 $res=$mySQLi->query($sql);  
		while($row=$res->fetch_array())
		 {
		?>

		<tr style="border:8px solid red">
			<td><img src="../../public/upload/<?php echo $row['img'];?>" alt="" width="200px"></td> 
			<td><?php echo "$row[GoodsName]"; ?></td>&nbsp;
			<td><?php echo "$row[GoodsDescribe]"; ?></td>&nbsp;
			<td>数量：<?php echo "$row[Counts]"; ?></td>&nbsp;
			<td>总价:<?php echo $row['price']; ?></td>&nbsp; 
		</tr>
	<?php
	}
  }
	else
	{
		echo "<script>alert('登录后才能查看订单');window.open('../login.php');</script>";
	}
	?>
		</table>
      
		
	
</body>
</html>