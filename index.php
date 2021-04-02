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
                      <h2 class="card-title mt-3"><b>Form Tambah Pasien</b></h2>
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
          <div class="col-sm-7"><input type="text" name="no_rk" class="form-control" id = "no_rk" required>
          </div>
        </div>

        <!-- <div class="form-item"><label for = "no_rk">No Rekam Medis* </label></div> 
        <input type="text" name="no_rk" id = "no_rk" required> -->

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "name">Nama <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="name" class="form-control" id = "name" required>
          </div>
        </div>

        <!-- <div class="form-item"><label for = "name">Nama*</label></div> 
        <input type="text" name="name" id ="name" required> -->

        <!-- <div class="form-item">Jenis Kelamin*</div>
        <input type="radio" id="pria" name="gender" value="pria"><label for="pria">Pria</label>
        <input type="radio" id="wanita" name="gender" value="wanita"><label for="pria">Wanita</label> -->
        
        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "gender">Jenis Kelamin <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="radio" id="pria" name="gender" value="pria"><label for="pria">Pria</label>
        <input type="radio" id="wanita" name="gender" value="wanita"><label for="pria">Wanita</label>
          </div>
        </div>

        <!-- <div class="form-item"><label for ="age">Umur*</label></div>
        <input type="text" name="age" id="age" required> -->

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "age">Umur <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="age" class="form-control" id = "age" required>
          </div>
        </div>
          
        <!-- <div class="form-item"><label for = "poli">Nomor Handphone*</label></div>
        <input type="text" name="no_hp" id="no_hp" required > -->

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "no_hp">No Handphone <span class="text-danger">*</span></label></div> 
          <div class="col-sm-7"><input type="text" name="no_hp" class="form-control" id = "no_hp" required>
          </div>
        </div>

  
        <!-- <div class="form-item"><label for = "address">Alamat</label></div>
        <textarea name="body" id="address"></textarea>  -->

        <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "address">Alamat </label></div> 
          <div class="col-sm-7"><textarea name="body" id="address"></textarea>
          </div>
        </div>


        <!-- <div class="form-group">
          <div class="row mt-2">
            <div class="col-sm-1"></div>
            <div class="col-sm-3"><label for="address">Alamat<span class="text-danger">*</span></label></div>
            <div class="col-sm-7"><textarea name="address" class="form-control" id="address" placeholder="isi alamat pasien"></textarea>
            </div>
        </div> -->

          <div class="form-group">
          <div class="row mt-2">
          <div class="col-sm-1"></div>
          <div class="col-sm-3"><label for = "poli">Poli <span class="text-danger">*</span></label></div>
        <?php 
          $types = array('Poli Umum', 'Poli Gigi');
         ?>
        <!-- Write the <select> tag below -->
        <div class="col-sm-7">
          <select class="form-control" name="poli">
          <option value="unselected">Pilih Poli</option>
           <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
           ?>
          </select>
            </div>
            </div>
        
        
        <!-- <button type="submit" class="btn btn-success btn-user btn-block">
          Submit
        </button> -->
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
  
</body>
</html>
