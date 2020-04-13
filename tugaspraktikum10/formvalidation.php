<!DOCTYPE html>
<html lang="en">
<?php
include"simpan_data.php";

?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
  .warning {color:#FF0000;}
</style>
  <title>Formulir</title>
</head>
<body>
  
  <h1 align="center">Formulir Pendaftaran Peserta Didik Baru<br><span class="badge badge-primary">SMAN 1 Wringinanom</span></h1>  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <div class="card border-0" >
    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal mengisi</label>
    <div class="col-sm-6">
    <input type="date" name="tanggal" class="form-group col form-control col-sm-4 <?php echo ($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal" placeholder="format tanggal 31/12/2000" value="<?php echo $tanggal;?>"><span class="warning"><?php echo $error_tanggal; ?></span>
    </div>
    </div>
    <br>
  
  <div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
  <div class="col-sm-12">
  <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama;?>">
  <span class="warning"><?php echo $error_nama; ?></span>
  </div>
  </div>
  <div class="col-sm-3">
  <label for="nisn" class="col-sm-4 col-form-label">NISN</label>

  <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Nomor NISN" value="<?php echo $nisn;?>">
  <span class="warning"><?php echo $error_nisn; ?></span>
    </div>

    <div class="col-sm-3">
  <label for="nik" class="col-sm-4 col-form-label">NIK</label>

  <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="Nomor NIK" value="<?php echo $nik;?>">
  <span class="warning"><?php echo $error_nik; ?></span>
    </div>
    </div>
  </div>
<br>
  <div class="card border-0">
  <div class="col-sm-5">
  <label for="jenis_kelamin" class="col-sm-6 col-form-label">Jenis Kelamin</label>
  </div>
  <div class="col-sm-5">
  <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="jenis_kelamin" class="custom-control-input" value="Laki-Laki">
  <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="jenis_kelamin" class="custom-control-input" value="Perempuan">
  <label class="custom-control-label" for="customRadio2">Perempuan</label>
  <span class="warning"><?php echo $error_jenis_kelamin; ?></span>
</div>
  </div>
</div>
<br>
<div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="tempat_lahir" class="col-sm-5 col-form-label">Tempat Lahir</label>
  <div class="col-sm-12">
  <input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is-invalid" : ""); ?>" id="tempat_lahir" placeholder="Kota atau Kabupaten" value="<?php echo $tempat_lahir;?>">
  <span class="warning"><?php echo $error_tempat_lahir; ?></span>
  </div>
  </div>
  <div class="col-sm-5">
  <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal lahir</label>
  <div class="col-sm-6">
    <input type="date" name="tanggal_lahir" class="form-control<?php echo ($error_tanggal_lahir !="" ? "is-invalid" : ""); ?>" id="tanggal_lahir" placeholder="format tanggal 31/12/2000" value="<?php echo $tanggal_lahir;?>"><span class="warning"><?php echo $error_tanggal_lahir; ?></span>
    </div>
    </div>
    </div>
  </div>
  <br>
<div class="card border-0">
  <div class="col-sm-4">
  <label for="no_registrasi" class="col-sm-6 col-form-label">Nomor Registrasi</label>

  <input type="text" name="no_registrasi" class="form-control <?php echo ($error_no_registrasi !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Nomor Registrasi" value="<?php echo $no_registrasi;?>">
  <span class="warning"><?php echo $error_no_registrasi; ?></span>
    </div>
</div>
<br>
<div class="card border-0">
<div class="col-sm-2">
  <label for="agama" class="col-sm-6 col-form-label">Agama</label>
  <input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="Masukkan Nomor" value="<?php echo $agama;?>"></div>
  <div class="row-sm-2">
  <span class="warning">*01.Islam 02.Kristem/Protestan 03.katholik 04.hindu 05.Budha 06.Konghucu 07.Kepercayaan Keapada Tuhan YME<?php echo $error_agama; ?></span>
  </div>
  </div>
<br>

  <div class="card border-0">
  <div class="col-sm-5">
  <label for="kewarganegaraan" class="col-sm-6 col-form-label">Kewarganegaraan</label>
  </div>
   <div class="col-sm-5">
  <div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="kewarganegaraan" class="custom-control-input" value="WNI">
  <label class="custom-control-label" for="customRadio3">WNI</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio4" name="kewarganegaraan" class="custom-control-input" value="WNA">
  <label class="custom-control-label" for="customRadio4"> WNA 
    <input type="text" name="negara" class="form-control" id="negara" placeholder="Negara Asal" value="<?php echo $negara;?>">

  <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
</div>
  </div>
</div>
<br>
  <div class="card border-0">
  <div class="col-sm-5">
  <label for="berkebutuhan_khusus" class="col-sm-6 col-form-label">Berkebutuhan Khusus</label>
  </div>
  <div class="col-sm-5">
    <select class="custom-select" name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus !="" ? "is-invalid" : ""); ?>">
  <option selected>Pilih Salah Satu :</option>
  <option value="Tidak">01.Tidak</option>
  <option value="Netra">02.Netra</option>
  <option value="Rungu">03.Rungu</option>
  <option value="Grahita Ringan">04.Grahita Ringan</option>
  <option value="Grahita Sendang">05.Grahita Sendang</option>
  <option value="Daksa Ringan">06.Daksa Ringan</option>
  <option value="Daksa Sedang">07.Daksa Sedang</option>
  <option value="Laras">08.Laras</option>
  <option value="Wicara">09.Wicara</option>
  <option value="Tuna Ganda">10.Tuna Ganda</option>
  <option value="Hiperaktif">11.Hiperaktif</option>
  <option value="Cerdas Istimewa">12.Cerdas Istimewa</option>
  <option value="Bakat Istimewa">13.Bakat Istimewa</option>
  <option value="Kesulitan Belajar">14.Kesulitan Belajar</option>
  <option value="Narkoba">15.Narkoba</option>
  <option value="Indigo">16.Indigo</option>
  <option value="Down Sindrome">17.Down Sindrome</option>
  <option value="Autis">18.Autis</option>
</select></label>
<span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
    </div>
  </div>
</div>
<br>
  <div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
  <div class="col-sm-12">
  <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat Lengkap" value="<?php echo $alamat;?>">
  <span class="warning"><?php echo $error_alamat; ?></span>
  </div>
  </div>
  <div class="col-sm-3">
  <label for="rt" class="col-sm-7 col-form-label">RT(Rukun Tetangga)</label>

  <input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="Nomor Rt" value="<?php echo $rt;?>">
  <span class="warning"><?php echo $error_rt; ?></span>
    </div>

    <div class="col-sm-3">
  <label for="rw" class="col-sm-7 col-form-label">RW(Rukun Warga)</label>

  <input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="Nomor Rw" value="<?php echo $rw;?>">
  <span class="warning"><?php echo $error_rw; ?></span>
    </div>
    </div>
  </div>
<br>
  <div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="dusun" class="col-sm-4 col-form-label">Dusun</label>
  <div class="col-sm-12">
  <input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun;?>">
  <span class="warning"><?php echo $error_dusun; ?></span>
  </div>
  </div>
  <div class="col-sm-3">
  <label for="desa" class="col-sm-7 col-form-label">Desa</label>

  <input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is-invalid" : ""); ?>" id="desa" placeholder="Nama Desa" value="<?php echo $desa;?>">
  <span class="warning"><?php echo $error_desa; ?></span>
    </div>

    <div class="col-sm-3">
  <label for="kecamatan" class="col-sm-7 col-form-label">Kecamatan</label>

  <input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Nama Kecamatan" value="<?php echo $kecamatan;?>">
  <span class="warning"><?php echo $error_kecamatan; ?></span>
    </div>
    </div>
  </div>
<br>
  <div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="kodepos" class="col-sm-4 col-form-label">Kode Pos</label>
  <div class="col-sm-12">
  <input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Masukkan Kode Pos" value="<?php echo $kodepos;?>">
  <span class="warning"><?php echo $error_kodepos; ?></span>
  </div>
  </div>
  <div class="col-sm-3">
  <label for="lintang" class="col-sm-4 col-form-label">Lintang</label>

  <input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="Masukkan Titik koordinat Lintang" value="<?php echo $lintang;?>">
  <span class="warning"><?php echo $error_lintang; ?></span>
    </div>

    <div class="col-sm-3">
  <label for="bujur" class="col-sm-4 col-form-label">Bujur</label>

  <input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="Masukkan Titik koordinat bujur" value="<?php echo $bujur;?>">
  <span class="warning"><?php echo $error_bujur; ?></span>
    </div>
    </div>
  </div>
<br>
<div class="card border-0">
<div class="col-sm-2">
  <label for="tempat_tinggal" class="col-sm-10 col-form-label">Tempat Tinggal</label>
  <input type="text" name="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal !="" ? "is-invalid" : ""); ?>" id="tempat_tinggal" placeholder="Masukkan Nomor" value="<?php echo $tempat_tinggal;?>"></div>
  <div class="row-sm-2">
  <span class="warning">*1.Bersama orang tua  2.Wali   3.Kos   4.Asrama   5.Panti Asuhan 
<?php echo $error_tempat_tinggal; ?></span>
  </div>
  </div>
<br>
  <div class="card border-0">
<div class="col-sm-2">
  <label for="transportasi" class="col-sm-10 col-form-label">Transportasi</label>
  <input type="text" name="transportasi" class="form-control <?php echo ($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi" placeholder="Masukkan Nomor" value="<?php echo $transportasi;?>"></div>
  <div class="row-sm-2">
  <span class="warning">*01.Jalan kaki   02.Kendaraan pribadi   03.Kendaraan Umum/angkot/Pete-pete   04.Jemputan Sekolah   05.Kereta Api   06.Ojek 07.Andong/Bendi/Sado/ Dokar/Delman/Beca   08P.erahu penyebrangan/Rakit/Getek
<?php echo $error_transportasi; ?></span>
  </div>
  </div>
<br>
  <div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="no_kks" class="col-sm-10 col-form-label">Nomor Kartu Keluarga Sejahtera (KKS)</label>
  <div class="col-sm-12">
  <input type="text" name="no_kks" class="form-control <?php echo ($error_no_kks !="" ? "is-invalid" : ""); ?>" id="no_kks" placeholder="Nomor KKS" value="<?php echo $no_kks;?>">
  <span class="warning"><?php echo $error_no_kks; ?></span>
  </div>
  </div>
  <div class="col-sm-5">
  <label for="anak_ke" class="col-sm-4 col-form-label">Anak ke-</label>
  <div class="col-sm-6">
    <input type="text" name="anak_ke" class="form-control<?php echo ($error_anak_ke !="" ? "is-invalid" : ""); ?>" id="anak_ke" placeholder="Anak ke berapa" value="<?php echo $anak_ke;?>"><span class="warning"><?php echo $error_anak_ke; ?></span>
    </div>
    </div>
    </div>
  </div>
<br>
  <div class="card border-0">
  <div class="form-row">
  <div class="col-sm-4">
  <label for="penerima_kps" class="col-sm-10 col-form-label">Penerima Kartu Perlindungan Sosial (KPS)</label>
  <div class="col-sm-12">
  <input type="text" name="penerima_kps" class="form-control" id="no_kks" placeholder="Ya/Tidak" value="<?php echo $penerima_kps;?>">
  </div>
  </div>
  <div class="col-sm-5">
  <label for="no_kps" class="col-sm-4 col-form-label">No KPS</label>
  <div class="col-sm-6">
    <input type="text" name="no_kps" class="form-control" id="no_kps" placeholder="Nomor KPS" value="<?php echo $no_kps;?>">
    </div>
    </div>
    </div>
  </div>
  <br>
    <br>
    <br>
    <div class="form-group row" align="center">
    <div class="col-sm-10">
      <button type ="submit" class="btn btn-primary"> Submit </button>
    </div>
  </div>
</form>
<div class="form-group row" align="center">
    <div class="col-sm-10">
<form method="get" action="login.php">
    <button type ="submit" class="btn btn-primary"> Beranda</button>
  </form>
</div>
</div>
</body>
</html>