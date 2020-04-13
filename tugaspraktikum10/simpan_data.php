<?php

include"data.php";
include"koneksi.php";

mysqli_connect($servername,$username,$password) or die(mysqli_error());
mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());


$sql="insert siswa set tanggal='$tanggal', nama='$nama', jenis_kelamin='$jenis_kelamin', nisn='$nisn', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', no_registrasi='$no_registrasi', agama='$agama', kewarganegaraan='$kewarganegaraan', negara='$negara', berkebutuhan_khusus='$berkebutuhan_khusus', alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', kecamatan='$kecamatan', kodepos='$kodepos', lintang='$lintang', bujur='$bujur', tempat_tinggal='$tempat_tinggal', transportasi='$transportasi', no_kks='$no_kks', anak_ke='$anak_ke', penerima_kps='$penerima_kps', no_kps='$no_kps'";
mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));


?>