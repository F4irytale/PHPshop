<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
$brandID=$_GET['brandID'];

$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sqlBrand="select * from brand where brandID=$brandID";

$resBrand=$mySQL->query($sqlBrand);
if($rowBrand=$resBrand->fetch_array())
{
	  

?>
<body>
	<form action="update.php" method='POST'>
 <p>分类名称 
    	<select name="ClassID" id="">
     <?php

     $sqlClass="select * from class";
     $resClass=$mySQL->query($sqlClass);
      while($rowClass=$resClass->fetch_array())
      {
      	if($rowClass['ClassID']==$rowBrand['ClassID'])
      	{
      	       echo "<option value=$rowClass[ClassID] selected=selected>$rowClass[ClassName]</option>";	
      	}
       else
       	{echo "<option value=$rowClass[ClassID]>$rowClass[ClassName]</option>";
       }
       }
     ?>
    	</select>
    </p> 
	<p>品牌名称：<input type="text" name='BrandName'  value='<?php echo $rowBrand['BrandName'];?>'></p>
	<p>品牌描述：<input type="text" name="BrandDescribe" value='<?php echo $rowBrand['BrandDescribe']; ?>'></p>
	<p><input type="hidden" name="BrandID" value='<?php echo $rowBrand['BrandID']; ?>'></p>
	
	 <input type="submit" value="修改">
	</form>

</body>
<?php
}
?>
</html>
