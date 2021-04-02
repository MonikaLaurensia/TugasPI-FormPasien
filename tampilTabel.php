<!DOCTYPE html>
<html>
<div class="container-fluid" >
<head>
  <meta charset="utf-8">
  <title>Data Pasien</title>
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
<div class="container">
<h1 class="title">Daftar Pasien </h1>

<a href="index.php"><button type="button" class=" btn btn-success mt-3">Tambahkan Data Pasien</button></a>

<table class=" text-center table table-hover mt-4" style="background-color: white" align="center">
    <tr class="table" style="background-color:#40E0D0" >
        <th> No. </th>
        <th> Aksi </th>
        <th> No Rekam Medis </th>
        <th> Nama </th>
        <th> Jenis Kelamin </th>
        <th> Umur </umur>
        <th> No Handphone </th>
        <th> Poli </th>
        <th> Alamat </th>
    </tr>
    
    <?php $i = 1; ?>
    <?php foreach ($pasien as $psn ): ?>
    <tr>
        <td> <?= $i; ?> </td>
        <td>
            <a href="ubah1.php?id=<?= $psn["id"]; ?>"><button type="submit" class="btn btn-info">Edit</button></a>
            <a href="hapus.php?id=<?= $psn["id"]; ?>"><button type="submit" class="btn btn-danger">Hapus</button></a>
        </td>
        <td><?= $psn["no_rk"]; ?></td>
        <td><?= $psn["name"]; ?></td>
        <td><?= $psn["gender"]; ?></td>
        <td><?= $psn["age"]; ?></td>
        <td><?= $psn["no_hp"]; ?></td>
        <td><?= $psn["poli"]; ?></td>
        <td><?= $psn["address"]; ?></td>
    </tr>
    
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</div>
</div>
</body>
</html>