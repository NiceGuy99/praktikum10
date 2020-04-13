<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siswa";

//create connection
$conn =mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

//Create table
$sql = "CREATE TABLE siswa 
(tanggal VARCHAR(20) NOT NULL,
nama VARCHAR(52) not null,
jenis_kelamin CHAR(15) not null,
nisn integer(16) not null,
nik integer(16) not null,
tempat_lahir VARCHAR(50) not null,
tanggal_lahir VARCHAR(20) not null,
no_registrasi integer(31) not null,
agama VARCHAR(10) not null,
kewarganegaraan CHAR(15) not null,
negara varchar(30),
berkebutuhan_khusus VARCHAR(20),
alamat VARCHAR(60)not null,
rt integer(3),
rw integer(3),
dusun VARCHAR(31) not null,
desa VARCHAR(31) not null,
kecamatan VARCHAR(31) not null,
kodepos integer(5),
lintang VARCHAR(31),
bujur VARCHAR(31),
tempat_tinggal VARCHAR(10),
transportasi VARCHAR(10),
no_kks integer(8),
anak_ke integer(2) not null,
penerima_kps char(5),
no_kps integer(14) )";
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>