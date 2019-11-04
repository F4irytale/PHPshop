  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charse="UTF-8">
	<title>Document</title>
  <style>.d1{background-color:pink;width: 1000px;
    }
    .t1{background-color:lemonchiffon;width:1000px;}
    .t2{background-color:lemonchiffon}
  </style>
</head>
<body>
  <div class="d1">
	<form action="insert.php" method='POST'>
    <br>
	<p>评价等级:
    <select name="Cdescribe" class="t2">
				<option value="好评">好评</option>
				<option value="中评">中评</option>
				<option value="差评">差评</option>
				</select>
	</p>
  <br>
  <hr color="" >
 
	<p>评价:</p>
	<textarea rows="10" clos="10" name="Content" class="t1"></textarea>
  <br>
  <br>
  <br>
  <hr color="" >
  <br>
	<p>商品信息:   	
	<select name="GoodsID" class="t2">
     <?php
      session_start();    
    $username=$_SESSION['username'];
     $mySQL=new mysqli('localhost','root','','shop',3306);
	   $mySQL->set_charset('utf8');
     $sql="select * from orders where UserName='$username'";
     $res=$mySQL->query($sql);

      while($row=$res->fetch_array())
      {
    		echo "<option value=$row[GoodsID]>$row[name]</option>";
       }
     ?>
    </select>
    </p>
  	<input type="submit" value="提交">
    <br>
  </form>
</div>
</body>
</html>