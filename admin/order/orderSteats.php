<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<table border="5">
  <tr>
  <th>价钱</th>
  <th>数量</th>
  <th>订单状态</th>
  <th>下单时间</th>
  <th>联系方式</th>
  <th>用户名</th>
  <th>商品号</th>
  <th>商品名</th>
  <th>发货</th>
</tr>
<?php 
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from orders";
$res=$mySQL->query($sql);
while($row=$res->fetch_array())
{
  ?>
  <tr>
  <td><?php echo $row['price'];?></td>
  <td><?php echo $row['Counts'];?></td>
  <td><?php echo $row['StatusID'];?></td>
  <td><?php echo $row['OrdersTime'];?></td>
  <td><?php echo $row['TouchID'];?></td>
  <td><?php echo $row['UserName'];?></td>
  <td><?php echo $row['GoodsID'];?></td>
  <td><?php echo $row['name'];?></td>
  <td><a href=""></a></td>
  </tr>
  <?php
}?>
</table>
<<!-- script type="text/javascript">
	$("#StatusID").on('click',function(){
	// alert("事件");
		$.ajax(
			{
				type:'POST',
				url:"check.php",
				dataType:'json',
				data:{
					StatusID:$("#StatusID").val()			},
				success:function(shuju){
				
					if(shuju.status==1)
					{
						$('#msg').html(shuju.message+shuju.role);
					}
					else{
		             $('#msg').html(shuju.message);
					}
				},
				error:function(jqXHR){
					alert("发生错误："+jqXHR.status);
				}
				
			});
		
		});
</script> -->
</body>
</html>