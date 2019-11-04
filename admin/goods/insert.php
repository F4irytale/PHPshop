<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$goodsName=$_POST['GoodsName'];
$goodsPrice=$_POST['GoodsPrice'];
$goodsDescribe=$_POST['GoodsDescribe'];
$goodsStock=$_POST['GoodsStock'];
$brandID=$_POST['BrandID'];
$supplierID=$_POST['SupplierID'];
$shelf=$_POST['shelf'];
$src=$_FILES['img']['tmp_name'];
$name=$_FILES['img']['name'];
// $ext=array_pop(explode('.', $name));
$arr=explode('.', $name);
$ext=array_pop($arr);
$fileName=time().'.'.$ext;
$dst='../../public/upload/'.$fileName;
if(move_uploaded_file($src, $dst))
{
	echo "成功";
}
else{
	echo "失败";
}
 $sql="insert into goods(GoodsName,GoodsPrice,GoodsDescribe,GoodsStock,BrandID,SupplierID,shelf,img) 
 values('$goodsName',$goodsPrice,'$goodsDescribe',$goodsStock,$brandID,$supplierID,$shelf,'$fileName')";
 echo $sql;
$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('插入失败');location='add.php'</script>";

}
else
{
echo "<script>location='goodsIndex.php'</script>";
}
?>