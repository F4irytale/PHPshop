<?php
session_start();
$username=$_SESSION['username'];
				$mySQL=new mysqli('localhost','root','','shop',3306);
				$mySQL->set_charset('utf8');
				$touchName= $_POST['name'];
				$touchAddress= $_POST['address'];
				$touchTelephone= $_POST['phone'];



				$sql="insert into touch(TouchName,UserName,TouchAddress,TouchTelephone) values('$touchName','$username','$touchAddress','$touchTelephone')";
				echo $sql;
				$res=$mySQL->query($sql);
				if($res==false)
				{
					echo "<script>alert('插入失败');location='add-address.php'</script>";

				}
				else
				{
					echo "<script>location='address-list.php'</script>";
				}
				?>