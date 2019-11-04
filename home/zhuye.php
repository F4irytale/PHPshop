<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>淘金网（TJ.COM）-正品低价，质量保证</title>
		<link type="text/css" rel="stylesheet" href="css/zhuye.css" />
		<script type="text/javascript" [src="lunbo.js"]></script>
	</head>
	<body>
		<div id="html">                                                 <!--总体div-->
		<div>
		     <img src="img/上方广告.jpg"  />
		</div>
		<div class="top">                                                 <!--头部div-->
			<div class="top-left">                                          <!--头部左面div-->
			<img src="img/jinbi.png" width="150px" height="150px"/>
			</div>
			<div class="top-left2">
				淘金商城
			</div>
			<div class="top-middle">                                            <!--头部中间div-->
				<br />
				<p>
				<form action="sousuo.php" method="post">
					<input name="asd" type="text" placeholder="百年孤独" size="48" style="border-color: #ff8f00;border-width: 3px;border-style: solid;
						height: 30px;"/>
					<input type="submit" value="搜索" style="height: 35px; width: 50px; background-color: #ff8f00;"/>
				</form>
				</p>
				<p style="font-size: 13px;">
					<a href="#">鞋包出游</a>
					<a href="#">数码生活</a>
					<a href="#">等身手办</a>
					<a href="#">生活用品</a>
					<a href="#">安全座椅</a>
					<a href="#">时尚女包</a>
					<a href="#">潮流男装</a>
					<a href="#">耳机</a>
				</p>
			</div>
			<div class="top-right">                                        <!--头部右边div-->
				<p><a href="个人.html">
				<img src="img/你好.png"/>
				</a>
				</p>
				<p>
					<form action="" method="post">
						<a href="login.php"><input type="button" value=" 登 录 " style="background-color:#ff8f00"/></a>&nbsp;&nbsp;&nbsp;
						<a href="geren.html"><input type="button" value="个人中心 " style="background-color:#ff8f00"/></a>&nbsp;&nbsp;&nbsp;
						<a href="shopcar.php"><input type="button" value="购物车" style="background-color:#ff8f00"/></a>

					</form>
				</p>
			</div>
		</div>
		<div class="middle">                                             <!--腰部div-->
			<div class="middle-top">                                    <!--腰部上方div-->
				 	<a href="#">秒杀</a>
					<a href="#">优惠券</a>
					<a href="#">抢购</a>
					<a href="#">特惠</a>
					<a href="#">必选</a>
					<a href="#">智能生活</a>
					<a href="#">淘金超市</a>
					<a href="#">电器城</a>
					<a href="#">司法拍卖</a>
					<a href="#">兴农扶贫</a>
			</div>
			<div class="middle-bottom">                                  <!--腰部下方左边div-->
				<div class="middle-bottom-left">
					主题市场<br />
					<a href="#">手 机 /</a><a href="#">运 营 商 /</a><a href="#">数 码 /</a><br />
					<a href="#">鞋 靴 /</a><a href="#">箱 包 /</a><a href="#">配 件 /</a><br />
					<a href="#">美 妆 /</a><a href="#">洗 护 /</a><a href="#">保 健 品 /</a><br />
					<a href="#">游 戏 /</a><a href="#">动 漫 /</a><a href="#">影 视 /</a><br />
					<a href="#">美 食 /</a><a href="#">生 鲜 /</a><a href="#">零 食 /</a><br />
					<a href="#">工 具 /</a><a href="#">装 修 /</a><a href="#">建 材 /</a><br />
					<a href="#">汽 车 /</a><a href="#">二 手 车 /</a><a href="#">用 品 /</a><br />
					<a href="#">办 公 /</a><a href="#">DIY /</a><a href="#">五 金 电 子 /</a><br />
					
				</div>
				<div class="middle-bottom-middle">                           <!--腰部轮播div-->
					<div class="middle-bottom-middle-2">
		                <marquee onmousemove="this.stop()" onmouseout="this.start()"behavior="alternate">
		                             <a href="#"><img src="img/轮播图1.jpg" /></a>
		                             <a href="#"><img src="img/轮播图2.jpg" /></a>
		                             <a href="#"><img src="img/轮播图3.jpg" /></a>
		                             <a href="#"><img src="img/轮播图4.jpg" /></a>
			            </marquee>
			        </div>
				</div>
				<div class="middle-bottom-right">                             <!--腰部下方右边div-->
					<a href="#"><img src="img/中间右1.png"/></a>
					<a href="#"><img src="img/中间右2.png"/></a>
				</div>
		</div>
		<div class="bottom-top-top">
			为你推荐
		</div>


		     <?php 
			    $mySQL=new mysqli('localhost','root','','shop',3306);
	            $mySQL->set_charset('utf8');
				$sqlClass="select * from class";
				$resClass=$mySQL->query($sqlClass);
				$i=1;
				while($rowClass=$resClass->fetch_array())
				{
					?>


		<div class="bottom">
			<div class="bottom-top">
			<div class="bottom-top-left">                                     <!--尾部1div--> 
			 &nbsp;&nbsp;<?php echo $i .'F'.$rowClass['ClassName']?>
			</div>
			<div class="bottom-top-right">                                           <!--尾部1div-->
				<a href="class.php?class_id=<?php echo $rowClass['ClassID'];?>">More>></a>
			</div>
			</div>
			<div class="boxbox">


				<?php
					$sqlShop="select goods.* from goods ,brand,class where brand.BrandID=goods.BrandID and class.ClassID=brand.ClassID and class.ClassID={$rowClass['ClassID'] } order by rand() limit 4";
					
					$resShop=$mySQL->query($sqlShop);
					while($rowShop=$resShop->fetch_array())
			           {
					?>


				<a href="xiangqing.php?goods_id=<?php echo $rowShop['GoodsID'];?>">
			<div class="box">
			<div class="bottom-img">
				<img src="../public/upload/<?php echo $rowShop['img']?>"/>
			</div>
			<div class="box1">
				<span class="box1-1"><?php echo $rowShop['GoodsName']?></span>
				<span class="box1-2"><?php echo $rowShop['GoodsPrice']?></span>
			</div>
			</div>
			</a>
			<?php
				}
			?>
			</div>
			<div>
			<?php
		    $i++; }
			?>
			</div>
		</div>
		<div class="finish">                                                       <!--结束1div-->
				<br />
				<hr size="2px" color="goldenrod" />
				<br />
				关于我们&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;联系我们&nbsp;&nbsp;&nbsp;&nbsp;|
				&nbsp;&nbsp;&nbsp;&nbsp;联系客服 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;合作中心
				&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;淘金公益&nbsp;&nbsp;&nbsp;&nbsp;|<br />
				<br />
				办公地点：河北省石家庄市石家庄铁道大学四方学院6栋120&nbsp;&nbsp;&nbsp;&nbsp;邮编：10010&nbsp;
				&nbsp;&nbsp;&nbsp;电话：12357415768&nbsp;&nbsp;&nbsp;&nbsp;电子邮箱：taojin&copy;163.com
		</div>
		</div>
	</body>
</html>
