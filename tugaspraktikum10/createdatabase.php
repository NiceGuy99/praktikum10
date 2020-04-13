<?php
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn =mysqli_connect($servername,$username,$password);
//check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

//Create database
$sql = "CREATE DATABASE siswa";
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>.


$id 			= $_POST['id'];
$Nama 			= $_POST['Nama'];
$Jkel 			= $_POST['Jkel'];
$Email 			= $_POST['Email'];
$Alamat 		= $_POST['Alamat'];
$Kota 			= $_POST['Kota'];
$Pesan 			= $_POST['Pesan'];
