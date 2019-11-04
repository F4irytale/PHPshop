<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
$goodsID=$_GET['goodsID'];

$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sqlGoods="select * from goods where  GoodsID=$goodsID";

$resGoods=$mySQL->query($sqlGoods);
if($rowGoods=$resGoods->fetch_array())
{
	  

?>
<body>
	 <form action="update.php" method='POST' enctype='multipart/form-data'>
<input type="hidden" name="GoodsID" value='<?php echo $rowGoods['GoodsID']; ?>'></p>
  

  <p>商品名称<input type="text" name='GoodsName' value='<?php echo $rowGoods['GoodsName'];?>'></p>
  <p>商品品牌 
      <select name="BrandID" id="">
     <?php
     $mySQL=new mysqli('localhost','root','','shop',3306);
   $mySQL->set_charset('utf8');
      $sql="select * from class";
     $res=$mySQL->query($sql);
      while($row=$res->fetch_array())
      {


        echo "<option value=$row[ClassID] disabled=disabled>$row[ClassName]</option>";

        $sqlB="select * from brand where ClassID=$row[ClassID]";
            $resB=$mySQL->query($sqlB);
         while($rowB=$resB->fetch_array())
        {
                  if($rowGoods['BrandID']==$rowB['BrandID'])
                  {
                  echo "<option value=$rowB[BrandID] selected='selected'>------$rowB[BrandName]</option>";
             
                  }
                 else {
                    echo "<option value=$rowB[BrandID]>------$rowB[BrandName]</option>";
             
                  } 

               }
       }
     ?>
      </select>
    </p>

  <p>商品图片<img src="../../public/upload/<?php echo $rowGoods['img'];?>" alt="">
    <input type="hidden" name='oldimg' value="<?php echo $rowGoods['img'];?>">
    <input type="file" name="img" ></p>
  <p>商品描述<input type="text" name="GoodsDescribe"  value='<?php echo $rowGoods['GoodsDescribe'];?>'></p>
  <p>商品价格<input type="text" name="GoodsPrice"  value='<?php echo $rowGoods['GoodsPrice'];?>'></p>
  <p>商品库存<input type="text" name="GoodsStock"  value='<?php echo $rowGoods['GoodsStock'];?>'></p>
 <p> 供应商
      <select name="SupplierID" id="">
     <?php
     $mySQL=new mysqli('localhost','root','','shop',3306);
   $mySQL->set_charset('utf8');
      $sql="select * from supplier";
     $res=$mySQL->query($sql);
      while($row=$res->fetch_array())
      {

       if($rowGoods['SupplierID']==$row['SupplierID'])
       {
echo "<option value=$row[SupplierID] selected='selected'>$row[SupplierName]</option>";
       
       }
       else
        echo "<option value=$row[SupplierID]>$row[SupplierName]</option>";
       
       }
     ?>
      </select>
    </p>
  <p>商品状态
    <?php  if ($rowGoods['shelf']==1)
    {
      ?>
    <input type="radio" name="shelf" value='1' checked='checked'>上架
   <input type="radio" name="shelf" value='0'>下架

    <?php }
    else
    {?>
     <input type="radio" name="shelf" value='1' >上架
   <input type="radio" name="shelf" value='0' checked='checked'>下架

  <?php }?>
     </p>
   
    <input type="submit" value="提交">
  </form>

</body>
<?php
}
?>
</html>
