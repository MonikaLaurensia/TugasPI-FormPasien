<?php

require "functions.php";


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit']) ){

  //cek apakah data berhasil ditambahkan atau tidak
  if (tambah ($_POST) > 0 ){
    echo "
        <script>
          alert('Data Pasien Berhasil Ditambahkan!');
          document.location.href = 'tampilTabel.php';
        </script>
    ";
  } else {
    echo "
        <script>
          alert('Data Pasien Gagal Ditambahkan!');
          document.location.href = 'tampilTabel.php';
        </script>
    ";
  }
} 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FORM TAMBAH PASIEN</title>
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
      <div class="form-title">Form Tambah Pasien</div>
      <form method="post" action="sent.php">
        <div class="form-item">Field dengan (*) wajib diisi</div>

        <div class="form-item"><label for = "no_rk">No Rekam Medis* </label></div> 
        <input type="text" name="no_rk" id = "no_rk">

        <div class="form-item"><label for = "name">Nama*</label></div> 
        <input type="text" name="name" id ="name" >

        <div class="form-item">Jenis Kelamin*</div>
        <input type="radio" id="pria" name="gender" value="pria"><label for="pria">Pria</label>
        <input type="radio" id="wanita" name="gender" value="wanita"><label for="pria">Wanita</label>
        

        <div class="form-item"><label for ="age">Umur*</label></div>
        <input type="text" name="age" id="age">
          
        <div class="form-item"><label for = "no_hp">Nomor Handphone*</label></div>
        <input type="text" name="no_hp" id="no_hp">
  
        <div class="form-item"><label for = "address">Alamat</label></div>
        <textarea name="body" id="address"></textarea> 

        <div class="form-item">Poli
        <?php 
          $types = array('Poli Umum', 'Poli Gigi');
         ?>
        <!-- Write the <select> tag below -->
        <select name="poli">
          <option value="unselected">Pilih Poli</option>
           <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
           ?>

        </select>   </div>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
  
</body>
</html>
