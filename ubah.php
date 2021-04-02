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
  <title>FORM EDIT PASIEN</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body class="bg-gradient-info">
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
    <section class="content">
      <div class="row justify-content-center">
        <div class="col-6">
        <div class="panel panel-info">
                  <div class="card mt-3">
                    <div class="card-header m-auto">
                      <h2 class="card-title mt-3"><b>Form Edit Data Pasien</b></h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                       <div class="col-sm-2"></div>
                      <div class= "col-sm-12 text-center">
      <div class="alert alert-danger alert-dismissible fade show -content-center align-content-center" role="alert">
       Field dengan tanda (*) wajib diisi.</div>
      </div>
      <form method="post" action="">

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "no_rk">No Rekam Medis <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="no_rk" class="form-control" id = "no_rk" required value="<?= $psn["no_rk"] ?>">
          </div>
        </div>
        
        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "name">Nama <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="name" class="form-control" id = "name" required value="<?= $psn["name"] ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "gender">Jenis Kelamin <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7">
          <input type="radio" id="pria" name="gender"<?php if($psn['gender']=="pria") echo "checked"?>  id="pria" value="pria"><label for="pria">Pria</label>
          <input type="radio" id="wanita" name="gender" <?php if($psn['gender']=="wanita") echo "checked"?>  id="wanita" value="wanita"><label for="wanita">Wanita</label>
          </div>
        </div>

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "age">Umur <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="age" class="form-control" id = "age" required value="<?= $psn["age"] ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "no_hp">No Handphone <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="no_hp" class="form-control" id = "no_hp" required value="<?= $psn["no_hp"] ?>">
          </div>
        </div>

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "address">Alamat </label></div> 
          <div class="col-sm-7"><textarea name="body" id="address"><?= $psn["address"] ?></textarea>
          </div>
        </div>

          <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "poli">Poli <span class="text-danger">*</span></label></div>
        <div class="col-sm-7"><select class="form-control" id="poli" name="poli">
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
            </div>
 
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
  
</body>
</html>
