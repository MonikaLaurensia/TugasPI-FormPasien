<?php

require "functions.php";

//ambil data di URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$psn = query("SELECT * FROM pasien WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit']) ){

  //cek apakah data berhasil diedit atau tidak
  if (ubah ($_POST) > 0 ){
    echo "
        <script>
          alert('Data Pasien Berhasil Diedit!');
          document.location.href = 'tampilTabel.php';
        </script>
    ";
  } else {
    echo "
        <script>
          alert('Data Pasien Gagal Diedit!');
          document.location.href = 'tampilTabel.php';
        </script>
    ";
  }
echo ubah ($_POST);
} 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FORM EDIT DATA PASIEN</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Sistem Informasi Klinik</div>
    <div class="header-right">
      <ul>
        <li>Home</li>
        <li class="selected">Pasien</li>
        <li>Dokter</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="pasien-form">
      <div class="form-title">Form Edit Data Pasien</div>
      <form method="post" action="">
        <div class="form-item">Field dengan (*) wajib diisi</div>
        <input type="hidden" name="id" value="<?= $psn["id"]; ?>">
        <div class="form-item"><label for = "no_rk">No Rekam Medis* </label></div> 
        <input type="text" name="no_rk" id = "no_rk" required value="<?= $psn["no_rk"] ?>">

        <div class="form-item"><label for = "name">Nama*</label></div> 
        <input type="text" name="name" id ="name" required value="<?= $psn["name"] ?>">

        <div class="form-item">Jenis Kelamin*</div>
        <input type="radio" id="pria" name="gender"<?php if($psn['gender']=="pria") echo "checked"?>  id="pria" value="pria"><label for="pria">Pria</label>
        <input type="radio" id="wanita" name="gender" <?php if($psn['gender']=="wanita") echo "checked"?>  id="wanita" value="wanita"><label for="wanita">Wanita</label>
        

        <div class="form-item"><label for ="age">Umur*</label></div>
        <input type="text" name="age" id="age" required value="<?= $psn["age"] ?>">
          
        <div class="form-item"><label for = "no_hp">Nomor Handphone*</label></div>
        <input type="text" name="no_hp" id="no_hp" required value="<?= $psn["no_hp"] ?>">
  
        <div class="form-item"><label for = "address">Alamat</label></div>
        <textarea name="body" id="address"><?= $psn["address"] ?></textarea> 

        <div class="form-item">Poli
        <select class="form-control" id="poli" name="poli">
        <?php if($psn['poli']=="Poli Umum"): ?>
            <option value="Poli Umum" selected>Poli Umum</option>
            <option value="Poli Gigi">Poli Gigi</option>
            <?php endif;?>
            <?php if ($psn['poli']=="Poli Gigi"): ?>
            <option value="Poli Umum">Poli Umum</option>
            <option value="Poli Gigi" selected>Poli Gigi</option>
            <?php endif;?>
        </select>
        </div>

        <input type="submit" value="Save" name="submit">
      </form>
    </div>
  </div>
  
</body>
</html>
