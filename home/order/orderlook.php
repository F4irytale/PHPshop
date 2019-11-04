<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	.div1 input{ width:1000px;
             height:30px; 
             font-size: 20px;
             color: orange;
             no-repeat;
             border:ridge; 
             float:left
}
  .div1 img{
        height: 320px;
        width: 1300px;
  }
    .div2 input{ width:200px;
             height:30px; 
             no-repeat;
             border:none; 
             float:left;
         }
    .div3  input{ width: 100px;
    	          height: 50px;
    	          no-repeat;
    	          border-color:black;
    	          float: left;

    }
    .div4  input{ width: 100px;
    	          height: 50px;
    	          border-color:black;
    	          float: left;

    }
    .div5 table{   
    	          float: none;
    	          border: 20px;
    	          width: 1500px;
    	          height: 200xp;
    }
    .div6  ul{ width: 200px;
    	       height: 88px;
    	       float: none;
             font-size: 20px;
             font-variant: 20px;
    }
    .div7 table{
              border: 5px;
              width: 1500px;
              height: 400px;
              font-size: 25px;
              font-family: 宋体;
    }
    p{
      color: yellow;
      text-align: center;
      font-size: 50px;
      font-family: 隶书;
    }
    img{
      height: 420px;
      width: 200px;
      float: left;
    }
    h2{
      font-family: 宋体;
      color: blue;
    }
    
    .div8{
      color: yellow;
      text-align: center;
      font-size: 60px;
      font-family: 隶书;
      background:orange;
    }
    .div8 img{
      width: 1500px;
      height: 150px;
    }
    iframe{
      height: 300px;
      width: 1500px;
    }
    p{
      font-size: 40px;
      font-family: 隶书;
      text-decoration:none; 
    }
    #div12{
      height: 150px;
      width: 1500px;
    }
    #div10 td{
      font-size: 25px;
      font-family: 隶书;
      text-align: center;
      color: yellow;
      text-decoration: none;
    }
    .div11{
      height: 1500px;
    }
    li{
      font-size: 25px;
      font-family: 楷书;
      color:orange;
     list-style-type: none;
     text-align: center;
    }
	 </style>
</head>

<body> 
  <div  class="div11">
  <div class="div8")>我的订单</div>
  <img src="../img/2.jpg">
  <h2>亲爱的用户:
    <?php
     session_start();    
    echo $_SESSION['username'];
    $username=$_SESSION['username'];
    ?>
       祝您心情愉快! </h2>
	<form action="" method="get">
    <div class="div1"><input name="" type="text" value="哎呦我的亲~~请输入订单编号"/>
    <div class="div2"><input name="" type="button" value="查看商品"/> </div><br><br>
     <img src="../img/4.jpg">
  </div>
    </form>
  <?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
?>
<div class="div7">
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
</tr>
<?php 
$sql="select * from orders where UserName='$username'";
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
  </tr>
  <?php
}?>
<tr>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
</tr>
</table>
</div>
<div class="div8")>已下单的商品<br>
<img src="../img/3.jpg">
</div>

<div class="div12">
 <div id="div10" class="">
        <table width="100%"height="30px"align="center"style="color: ">
          <tr bgcolor="aliceblue">
            <td id="line"><a href="daifukuan.php" target="iframe">待付款</a></td>
            <td id="line"><a href="daifahuo.php" target="iframe">待发货</a></td>
              <td id="line"><a href="daishouhuo.php" target="iframe">待收货</a></td>
              <td id="line"><a href="daipingjia.php" target="iframe">待评价</a></td>
          </tr>
        </table>
      <div class="iframe">
      <iframe src="" name="iframe" width="800px" height="800px"></iframe>
      </div>
      </div>
 <p><a href="../shopcar.php">查看商品信息</a></p>
   
			<ul>
				<li><a href="../shopcar.php">联系卖家</a></li><br>
				<li><a href="#" onclick="if(confirm('确定拨出吗？')==false)return false;">拨打电话</a></li><br>
        <li><a href="../zhuye.php" onclick="if(confirm('确认返回吗？')==false)return false;">返回主页</a></li>
			</ul>
      <p>祝您购物愉快!欢迎您下次再来!</p>
		</div>
  </div>

</body>
</html>
 



