<?php
$class_id=$_GET['class_id'];


    $mySQL=new mysqli('localhost','root','','shop',3306);
    $mySQL->set_charset('utf8');
$sqlClass="select * from class where ClassID=$class_id";
$resClass=$mySQL->query($sqlClass);
$rowClass=$resClass->fetch_array();



$sqlShop="select goods.* from goods ,brand,class where brand.BrandID=goods.BrandID and class.ClassID=brand.ClassID and class.ClassID=$class_id";
$resShop=$mySQL->query($sqlShop);
$rowShops=array();
while($rowShop=$resShop->fetch_array())

{   if(!isset($_GET['brand_id']))
	{
		 $rowShops[$rowShop['GoodsID']]=$rowShop;
	}
	else if ($rowShop['BrandID']==$_GET['brand_id'])
     {
      $rowShops[$rowShop['GoodsID']]=$rowShop;
     }

 }




$sqlBrand="select brand.*,class.ClassName from  brand,class where brand.ClassID=class.ClassID and class.ClassID=$class_id";
$resBrand=$mySQL->query($sqlBrand);
while($rowBrand=$resBrand->fetch_array())
{
	$rowBrands[$rowBrand['BrandID']]=$rowBrand;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>淘金网-分类页面</title>
	<link rel="stylesheet" type="text/css" href="css/class.css">
</head>
<body>
	<div class="html">
		<div class="top">
			<div class="top-left1">
				<img src="img/jinbi.png" width="50px" height="50px">
			</div>
			<div class="top-left2">
				淘金商城
			</div>
			<div class="top-right">
				<a href="login.php">登录</a>&nbsp;
				<a href="registe.php">注册</a>&nbsp;
				<a href="geren.html">个人中心</a>
			</div>
		</div>
		<div class="middle">
		<div class="middle-top">
			<div class="middle-top-left">
				<a href="zhuye.php" style="text-decoration: none;color: white;">首页>></a>
				<?php
					echo $rowClass['ClassName'];
				?>
			</div>
			<div class="middle-top-right">
				<?php
					foreach ($rowBrands as $key => $brand) {
				?>
				<a href="class.php?class_id=<?php echo $class_id;?>&brand_id=<?php echo $brand['BrandID'];?>"style="text-decoration: none;color: white;"><?php echo $brand['BrandName']; ?></a>
				<?php	}
				?>
			</div>
		</div>
		<div class="middle-middle">

			<?php
						foreach ($rowShops as $key => $shop) {
			?>

			<a href="#">
			<div class="box">
			<div class="bottom-img">
				<img src="../public/upload/<?php echo $shop['img']?>"/>
			</div>
			<div class="box1">
				<span class="box1-1"><?php echo $shop['GoodsName']?></span>
				<span class="box1-2"><?php echo $shop['GoodsPrice']?></span>
			</div>
			</div>
			</a>
			<?php
						}

					?>
		</div>
		</div>
		<div class="bottom">
			<a href="#">关于我们</a>&nbsp;&nbsp;
			<a href="#">联系我们</a>&nbsp;&nbsp;
			<a href="#">公司信息</a>&nbsp;&nbsp;
			<a href="#">地图</a>
		</div>
	</div>
</body>
</html>