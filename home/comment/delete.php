<?php
$commentID=$_GET['commentID'];

$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf-8');
$sql="delete from comment where CommentID='$commentID'";

$res=$mySQL->query($sql);
if($res==false)
{
	echo "<script>alert('删除失败');location='commentIndex.php'</script>";

}
else
{
echo "<script>location='commentIndex.php'</script>";
}
?>