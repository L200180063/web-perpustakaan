<!-- memanggil fungsi-fungsi php pada file "function.php" dengan perintah 'require'-->
<?php
session_start();
require "function.php";
?>
<!-- struktur HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ray's Bookstore | Admin - Home</title>
  <!-- menghubungkan file "index.php" dengan "style.css" untuk mengatur tampilan -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/button.css">
</head>
<body>
  <div class="base">
    <div class="header">
      <a href="admin.php" class="h-1 animasi">Ray's Bookstore</a>
      <div id="username">
        <span>Hai, <?php echo $_SESSION["username"]; ?></span>
        <a href="index.php" onclick="return confirm('Apakah anda ingin Logout?')" class="btn btn-putih btn-small border">Logout</a>
      </div>
    </div>
    <div class="title tengah">
      <p>Daftar Buku</p>
    </div>
    <div class="container">
      <div class="content">
        <div class="atas">
          <form action="" method="get" class="pencarian">
            <input type="search" name="cari" placeholder="Pencarian" />
            <input type="submit" value="Cari" />
          </form>
          <?php 
          if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";
          }
          ?>
          <a href="tambah.php" class="btn btn-biru btn-small">Tambah</a>
        </div>
        <!-- melakukan perulangan dengan perintah 'foreach' untuk menampilkan setiap data yang tersedia di database -->
        <?php 
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $form_buku = query("SELECT * FROM form_buku WHERE judul LIKE '%".$cari."%' OR penerbit like '%".$cari."%' ");     
        }else{
          $form_buku = query("SELECT * FROM form_buku");   
        }
        ?>
        <?php foreach ($form_buku as $row): ?>
        <div class="card">
          <img class="card-poster" src="upload/<?= $row["gambar"]?>" alt="upload/<?= $row["gambar"]?>" />
          <p class="card-judul"><?= $row["judul"]; ?></p>
          <p class="card-sub"><?= $row["pengarang"]; ?></p>
          <p class="card-sub"><?= $row["penerbit"]; ?></p>
          <div class="card-bot">
            <a href="edit.php?id_buku=<?= $row["id_buku"];?>" class="btn btn-kuning btn-small">Edit</a>
            <a href="delete.php?id_buku=<?= $row["id_buku"];?>" class="btn btn-merah btn-small" onclick="return confirm('Apakah anda ingin menghapus data?')">Delete</a>
          </div>
        </div>
        <!-- mengakhiri perintah perulangan dengan menggunakan 'endforeach' -->
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <footer>&copy;2022 Rayhand Pratama | XI-RPL 2</footer>
</body>
</html>