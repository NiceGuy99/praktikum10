 <?php
$error_tanggal ="";
$error_nama ="";
$error_jenis_kelamin ="";
$error_nisn ="";
$error_nik ="";
$error_tempat_lahir ="";
$error_tanggal_lahir ="";
$error_no_registrasi ="";
$error_agama ="";
$error_kewarganegaraan ="";
$error_negara ="";
$error_berkebutuhan_khusus ="";
$error_alamat ="";
$error_rt ="";
$error_rw ="";
$error_dusun ="";
$error_desa ="";
$error_kecamatan ="";
$error_kodepos ="";
$error_lintang ="";
$error_bujur ="";
$error_tempat_tinggal ="";
$error_transportasi ="";
$error_no_kks ="";
$error_anak_ke ="";
$error_penerima_kps ="";
$error_no_kps ="";

$tanggal="";
$nama ="";
$jenis_kelamin ="";
$nisn ="";
$nik ="";
$tempat_lahir ="";
$tanggal_lahir ="";
$no_registrasi ="";
$agama ="";
$kewarganegaraan ="";
$negara ="";
$berkebutuhan_khusus ="";
$alamat ="";
$rt ="";
$rw ="";
$dusun ="";
$desa ="";
$kecamatan ="";
$kodepos ="";
$lintang ="";
$bujur ="";
$tempat_tinggal ="";
$transportasi ="";
$no_kks ="";
$anak_ke ="";
$penerima_kps ="";
$no_kps ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["tanggal"])){
      $error_tanggal = "tanggal tidak boleh kosong";
    } else{
      $tanggal = cek_input($_POST["tanggal"]);
      if (!preg_match("/^[0-9\/]*$/",$tanggal)){
        $tanggal = "$tanggal";
      }
    }
    
    if(empty($_POST["nama"])){
      $error_nama = "Nama tidak boleh kosong";
    } else{
      $nama = cek_input($_POST["nama"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$nama)){
        $error_nama = "Input Hanya boleh huruf dan spasi";
      }
    }

    if(empty($_POST["jenis_kelamin"])){
     $error_jenis_kelamin = "Pilih salah satu";
    } else {
      $jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
    }
       
    if(empty($_POST["nisn"])){
     $error_nisn = "nisn tidak boleh kosong";
    } else{ 
     $nisn = cek_input($_POST["nisn"]);
     if (!is_numeric($nisn)){
       $error_nisn = "Nomor nisn hanya boleh angka";
     }
    }

    if(empty($_POST["nik"])){
     $error_nik = "nik tidak boleh kosong";
    } else{ 
     $nik = cek_input($_POST["nik"]);
     if (!is_numeric($nik)){
       $error_nik = "Nomot nik hanya boleh angka";
     }
    }

    if(empty($_POST["tempat_lahir"])){
      $error_tempat_lahir = "tempat lahir tidak boleh kosong";
    } else{
      $tempat_lahir = cek_input($_POST["tempat_lahir"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$tempat_lahir)){
        $tempat_lahir = "Input Hanya boleh huruf dan spasi";
      }
    }

    if(empty($_POST["tanggal_lahir"])){
      $error_tanggal_lahir = "tanggal lahir tidak boleh kosong";
    } else{
      $tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
      if (!preg_match("/^[0-9\/]*$/",$tanggal_lahir)){
        $tanggal_lahir = "$tanggal_lahir";
      }
    }

    if(empty($_POST["no_registrasi"])){
     $error_no_registrasi = "registrasi tidak boleh kosong";
    } else{ 
     $no_registrasi = cek_input($_POST["no_registrasi"]);
     if (!is_numeric($no_registrasi)){
       $error_no_registrasi = "Nomor registrasi hanya boleh angka";
     }
    }

    if(empty($_POST["agama"])){
      $error_agama = "Nama tidak boleh kosong";
    } else{
      $agama = cek_input($_POST["agama"]);
      if (!is_numeric($agama)){
        $agama = "Input Hanya boleh angka";
      }
    }

    if(empty($_POST["kewarganegaraan"])){
     $error_kewarganegaraan = "Pilih salah satu";
    } else {
      $kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
    }

    if(empty($_POST["negara"])){
     $error_negara = "Tuliskan negara asal";
    } else {
      $negara = cek_input($_POST["negara"]);
    }


    if(empty($_POST["berkebutuhan_khusus"])){
     $error_berkebutuhan_khusus = "Pilih salah satu";
    } else {
      $berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);
    }

    if(empty($_POST["alamat"])){
      $error_alamat = "alamat tidak boleh kosong";
    } else{
      $alamat = cek_input($_POST["alamat"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$alamat)){
        $alamat = "isikan alamat dengan benar";
      }
    }

    if(empty($_POST["rt"])){
     $error_rt ="rt tidak boleh kosong";
    } else{ 
     $rt = cek_input($_POST["rt"]);
     if (!is_numeric($rt)){
       $error_rt = "rt hanya boleh angka";
     }
    }

    if(empty($_POST["rw"])){
     $error_rw ="rw tidak boleh kosong";
    } else{ 
     $rw = cek_input($_POST["rw"]);
     if (!is_numeric($rw)){
       $error_rw = "rw hanya boleh angka";
     }
    }

    if(empty($_POST["dusun"])){
      $error_dusun = "dusun tidak boleh kosong";
    } else{
      $dusun = cek_input($_POST["dusun"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$dusun)){
        $dusun = "isikan dusun dengan benar";
      }
    }

    if(empty($_POST["desa"])){
      $error_desa = "desa tidak boleh kosong";
    } else{
      $desa = cek_input($_POST["desa"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$desa)){
        $desa = "isikan desa dengan benar";
      }
    }

    if(empty($_POST["kecamatan"])){
      $error_kecamatan = "kecamatan tidak boleh kosong";
    } else{
      $kecamatan = cek_input($_POST["kecamatan"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$kecamatan)){
        $kecamatan = "isikan kecamatan dengan benar";
      }
    }

    if(empty($_POST["kodepos"])){
     $error_kodepos ="kodepos tidak boleh kosong";
    } else{ 
     $kodepos = cek_input($_POST["kodepos"]);
     if (!is_numeric($kodepos)){
       $error_kodepos = "kodepos hanya boleh angka";
     }
    }

    if(empty($_POST["lintang"])){
      $error_lintang = "lintang tidak boleh kosong";
    } else{
      $lintang = cek_input($_POST["lintang"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$lintang)){
        $lintang = "isikan lintang dengan benar";
      }
    }

    if(empty($_POST["bujur"])){
      $error_bujur = "bujur tidak boleh kosong";
    } else{
      $bujur = cek_input($_POST["bujur"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$bujur)){
        $bujur = "isikan bujur dengan benar";
      }
    }

    if(empty($_POST["tempat_tinggal"])){
      $error_tempat_tinggal = "tempat tinggal tidak boleh kosong";
    } else{
      $tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$tempat_tinggal)){
        $tempat_tinggal = "isikan tempat tinggal dengan benar";
      }
    }

    if(empty($_POST["transportasi"])){
      $error_transportasi = "transportasi tidak boleh kosong";
    } else{
      $transportasi = cek_input($_POST["transportasi"]);
      if (!preg_match("/^[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]*$/",$transportasi)){
        $transportasi = "isikan transportasi dengan benar";
      }
    }

    if(empty($_POST["no_kks"])){
     $no_kks = cek_input($_POST["no_kks"]);
    } else{ 
     $no_kks = cek_input($_POST["no_kks"]);
    }

    if(empty($_POST["anak_ke"])){
     $error_anak_ke ="anak ke tidak boleh kosong";
    } else{ 
     $anak_ke = cek_input($_POST["anak_ke"]);
     if (!is_numeric($anak_ke)){
       $error_anak_ke = "anak ke hanya boleh angka";
     }
    }

    if(empty($_POST["penerima_kps"])){
     $error_penerima_kps = "Pilih salah satu";
    }

    if(empty($_POST["no_kps"])){
     $error_no_kps ="no_kps tidak boleh kosong";
    } else{ 
     $no_kps = cek_input($_POST["no_kps"]);
     if (!is_numeric($no_kps)){
       $error_no_kps = "no_kps hanya boleh angka";
     }
    }
  }
  
  function cek_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>