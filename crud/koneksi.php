<?php
error_reporting(0);
$databaseHost="localhost";
$databaseName="pemweb2";
$databaseUsername="root";
$databasePassword="";
$conn=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$conn)
{
	echo"Koneksi gagal";
}

?>