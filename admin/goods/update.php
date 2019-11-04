<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$goodsID=$_POST['GoodsID'];
$goodsName=$_POST['GoodsName'];
$goodsPrice=$_POST['GoodsPrice'];
$goodsDescribe=$_POST['GoodsDescribe'];
$goodsStock=$_POST['GoodsStock'];
$brandID=$_POST['BrandID'];
$supplierID=$_POST['SupplierID'];
$shelf=$_POST['shelf'];
//判断有上传图片，error为0上传了图片
if($_FILES['img']['error']==0)
{
$src=$_FILES['img']['tmp_name'];
$name=$_FILES['img']['name'];
// $ext=array_pop(explode('.', $name));
$arr=explode('.', $name);
$ext=array_pop($arr);
$fileName=time().'.'.$ext;
$dst='../../public/upload/'.$fileName;
if(move_uploaded_file($src, $dst))
{
	//删除旧图
  unlink('../../public/upload/'.$_POST['oldimg']);
	echo "成功";
}
else{
	echo "失败";
}
 $sql="update goods  set 
GoodsName='$goodsName',
GoodsPrice='$goodsPrice' ,
GoodsDescribe='$goodsDescribe',
GoodsStock=$goodsStock,
BrandID=$brandID,
SupplierID=$supplierID,
shelf=$shelf,
img='$fileName' 
where GoodsID=$goodsID ";

}
elseif($_FILES['img']['error']==4)
{//没有修改图片

$sql="update goods  set 
GoodsName='$goodsName',
GoodsPrice='$goodsPrice' ,
GoodsDescribe='$goodsDescribe',
GoodsStock=$goodsStock,
BrandID=$brandID,
SupplierID=$supplierID,
shelf=$shelf 
where GoodsID=$goodsID ";
}


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


