<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="insert.php" method='POST'>
    <p>分类名称 
    	<select name="ClassID" id="">
     <?php
     $mySQL=new mysqli('localhost','root','','shop',3306);
	 $mySQL->set_charset('utf8');
      $sql="select * from class";
     $res=$mySQL->query($sql);
      while($row=$res->fetch_array())
      {


    		echo "<option value=$row[ClassID]>$row[ClassName]</option>";
       }
     ?>
    	</select>
    </p>
	<p>品牌名称<input type="text" name='BrandName'></p>
	<p>品牌描述<input type="text" name="BrandDescribe"></p>
		<input type="submit" value="提交">
	</form>

</body>
</html>