<?php 
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
      alert('Data Pasien Berhasil Dihapus!');
      document.location.href = 'tampilTabel.php';
    </script>
";
} else {
    echo "
        <script>
        alert('Data Pasien Gagal Dihapus!');
        document.location.href = 'tampilTabel.php';
        </script>
    ";
}



?>