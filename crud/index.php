<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard table Users</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2 align="center"> DATA USERS </h2>
<table border="1" width="80%" align="center">
<button><a href="add.php">ADD</a></button>
<th width="5%">Id </th>
<th width="20%">Nama</th>
<th width="20%">Email</th>
<th width="15%">No_hp(mobile)</th>
<th width="20%">gambar</th>
<th width="20%">Aksi</th>
<?php
$sql="SELECT * FROM users";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
	echo "<tr>";
	echo "<td align='center'>$row[0]</td>";
	echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td><img src= 'images/" . $row[4] . "' width='100' height='100'></td>";
	echo "<td align='center'>
		<a href='update.php?id=$row[0]' class='update'>Edit</a>
		<a href='delete.php?id=$row[0]' class='delete'>Hapus</a>
	</td>";
	echo "</tr>";
} 
?>
</table>
</body>
</html>