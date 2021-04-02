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

<h1>Daftar Pasien </h1>

<a href="index.php">Tambah data pasien </a>

<table border="1" cellspacing="0">
    <tr>
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
            <a href="ubah.php?id=<?= $psn["id"]; ?>">edit</a> |
            <a href="hapus.php?id=<?= $psn["id"]; ?>">hapus</a>
        </td>
        <td><?= $psn["no_rk"]; ?></td>
        <td><?= $psn["name"]; ?></td>
        <td><?= $psn["gender"]; ?></td>
        <td><?= $psn["age"]; ?></umur>
        <td><?= $psn["no_hp"]; ?></td>
        <td><?= $psn["address"]; ?>/td>
        <td><?= $psn["poli"]; ?></td>
    </tr>
    
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

    
</body>
</html>
