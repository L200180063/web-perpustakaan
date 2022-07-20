<!-- memanggil fungsi-fungsi php pada file "function.php" dengan perintah 'require'-->
<?php
session_start();
require "function.php";

$id_buku = $_GET["id_buku"];

//ambil data dari tabel form_buku berdasarkan id_buku yang dipilih
$form_buku = query("SELECT * FROM form_buku WHERE id_buku = $id_buku")[0]; 

// jika melakukan submit
if (isset($_POST["submit"])){

	//cek jika data berhasil ditambahkan
	if (edit($_POST) > 0){
		echo "
			<script>
				alert('Data Berhasil Disimpan');
				document.location.href = 'admin.php';
			</script>
		";
	}else{
		echo "<script>
				alert('Data Gagal Disimpan');
				document.location.href = 'admin.php';
			</script>";
	}
}
?>

<!-- struktur HTML -->
<!DOCTYPE html>
<html>
<head>
	<title>Ray's Bookstore | Edit Data Buku</title>
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
    <div class="atas-2">
      <a href="index.php" class="btn btn-putih btn-small border">Kembali</a>
    </div>
    <div class="title">
      <p>Edit Buku</p>
    </div>
      <div class="container">
        <div class="content-2">
          <!-- membuat form untuk menampung input data baru -->
          <form action="" method="POST" enctype="multipart/form-data">
            <!-- 'input type="hidden"' untuk menyembunyikan nilai 'id_buku' dan 'gambar' -->
            <input type="hidden" name="id_buku" value="<?= $form_buku["id_buku"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $form_buku["gambar"]; ?>">
            
            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" required value="<?= $form_buku["judul"]; ?>" />
            
            <label for="pengarang">Penulis Buku</label>
            <input type="text" name="pengarang"required value="<?= $form_buku["pengarang"]; ?>"/>
            
            <label for="penerbit">Penerbit Buku</label>
            <input type="text" name="penerbit" required value="<?= $form_buku["penerbit"]; ?>"/>
            
            <label for="gambar">Gambar Buku</label>
            <img src="upload/<?= $form_buku["gambar"]; ?>" />
            <p>File saat ini : <?= $form_buku["gambar"]; ?></p>
            <input type="file" name="gambar" />

            <div class="full-w">
              <button type="submit" name="submit" class="btn-hijau btn-medium">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <footer>&copy;2022 Rayhand Pratama | XI-RPL 2</footer>
</body>
</html> 