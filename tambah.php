<?php
session_start();
// memanggil fungsi-fungsi php pada file "function.php" dengan perintah 'require'
require "function.php";
// jika melakukan submit
if (isset($_POST["submit"])){

	//cek jika data berhasil ditambahkan (jumlah data > 0 berarti sukses)
	if (tambah($_POST) > 0){
    // menampilkan alert
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'admin.php';
			</script>
		";
	}else{
		echo "<script>
	}
			alert('Data Gagal Ditambahkan');
				document.location.href = 'admin.php';
			</script>";
	}
}
?>

<!-- struktur HTML -->
<!DOCTYPE html>
<html>
<head>
	<title>Ray's Bookstore | Tambah Data Buku</title>
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
      <a href="admin.php" class="btn btn-putih btn-small border">Kembali</a>
    </div>
    <div class="title">
      <p>Tambah Buku</p>
    </div>
      <div class="container">
        <div class="content-2">
          <!-- membuat form untuk menampung input data -->
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="judul">Judul Buku</label>
            <input type="text" name="judul" placeholder="Masukan Judul Buku ..." required/>

            <label for="pengarang">Penulis Buku</label>
            <input type="text" name="pengarang" placeholder="Masukan Penulis Buku ..." required/>

            <label for="penerbit">Penerbit Buku</label>
            <input type="text" name="penerbit" placeholder="Masukan Penerbit Buku ..." required/>

            <label for="gambar">Gambar Buku</label>
            <input type="file" name="gambar" required/>

            <div class="full-w">
              <input type="submit" name="submit" value="Tambah" class="btn-hijau btn-medium" />
            </div>
          </form>
        </div>
      </div>
    </div>
  <footer>&copy;2022 Rayhand Pratama | XI-RPL 2</footer>
</body>
</html> 