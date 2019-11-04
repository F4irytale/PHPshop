<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="insert.php" method='POST' enctype='multipart/form-data'>

  <p>商品名称<input type="text" name='GoodsName'></p>
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
                  echo "<option value=$rowB[BrandID]>------$rowB[BrandName]</option>";
               }
       }
     ?>
      </select>
    </p>
  <p>商品图片<input type="file" name="img"></p>
  <p>商品描述<input type="text" name="GoodsDescribe"></p>
  <p>商品价格<input type="text" name="GoodsPrice"></p>
  <p>商品库存<input type="text" name="GoodsStock"></p>
 <p> 供应商
      <select name="SupplierID" id="">
     <?php
     $mySQL=new mysqli('localhost','root','','shop',3306);
   $mySQL->set_charset('utf8');
      $sql="select * from supplier";
     $res=$mySQL->query($sql);
      while($row=$res->fetch_array())
      {


        echo "<option value=$row[SupplierID]>$row[SupplierName]</option>";
       
       }
     ?>
      </select>
    </p>
  <p>商品状态
   <input type="radio" name="shelf" value='1' checked='checked'>上架
   <input type="radio" name="shelf" value='0'>下架
  </p>
   
    <input type="submit" value="提交">
  </form>

</body>
</html>