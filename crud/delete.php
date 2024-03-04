<?php
include 'koneksi.php';



$id=$_GET['id'];
$sql="DELETE FROM users WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
	echo "<script language='JavaScript'>
  	  			(window.alert('Data User sudah dihapus'))
  	  			location.href='index.php'
  	  			</script>";
}
else{
		echo "<script language='JavaScript'>
  	  			(window.alert('Data User tidak dapat dihapus'))
  	  			location.href='index.php'
  	  			</script>";
}
?>
