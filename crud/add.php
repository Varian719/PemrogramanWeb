<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Users</title>
	<style>
		body {
    font-family: Arial, sans-serif;
    background-color: aquamarine;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #b38c00;
    color: white;
}
.gambar:hover {
	color: white;
    text-decoration: underline;
    
}
.gambar{
    background-color: #b50526;
	color:white;
}


.submit:hover {
    color: white;
    text-decoration: underline;
    
}
.submit{
    background-color: #048230;
	color:white;
}

	</style>
</head>
<body>
<h2 align="center">Insert new Data</h2>
<form method="POST" enctype="multipart/form-data">
<table border="1" width="60%" align="center">
		<tr>
		<td width="25%">Nama: </td>
		<td width="75%">
			<input type="text" name="name" size="60%" required>
		</td>
	</tr>
    <tr>
		<td width="25%">Email: </td>
		<td width="75%">
			<input type="email" name="email" size="60%" required>
		</td>
	</tr>
    <tr>
		<td width="25%">No hp: </td>
		<td width="75%">
			<input type="number" name="mobile" size="60%" required>
		</td>
	</tr>
	<tr>
    <tr>
		<td width="25%">Gambar</td>
		<td width="75%">
            <input type="file" name="gambar" required  accept="image/*">
		</td>
	</tr>
	<tr>
		<td width="25%"></td>
		<td width="75%">
			<input type="submit" name="save" value="Simpan" class="submit">
		</td>
	</tr>
</table>
</form>
<?php 

// Check if image file is a actual image or fake image

if(isset($_POST['save'])){
     
	$nama= $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
	

    $gambar_name = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_path = "images/";

    move_uploaded_file($gambar_tmp, $gambar_path . $gambar_name);

    $qry="INSERT INTO users (name,email,mobile,gambar) values('$nama','$email','$mobile','$gambar_name')";
	$hasil = mysqli_query($conn,$qry);
	if($hasil){
	echo "<script language='JavaScript'>
  	  			(window.alert('Data Users sudah disimpan'))
  	  			location.href='index.php'
  	  			</script>";

	}else{
		echo "<script language='JavaScript'>
        (window.alert('Data Users tidak dapat  disimpan'))
        location.href='index.php'
        </script>";
	}
}
?>
</body>
</html>