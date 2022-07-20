<!-- file ini berisi kumpulan fungsi-fungsi php -->
<?php 
// variabel $conn -> untuk menghubungkan aplikasi dengan database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
// variabel $form_buku -> untuk mengambil semua data pada tabel form_buku
$form_buku = query("SELECT * FROM form_buku");

// fungsi query -> untuk menyimpan data pada tabel form_buku ke dalam array $rows
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

// fungsi tambah -> untuk menambahkan data baru ke dalam tabel form_buku
function tambah($data){
	global $conn;
	date_default_timezone_set('Asia/Jakarta');
	// mengambil nilai pada inputan dan menyimpan ke dalam suatu variabel
	$judul = htmlspecialchars($data["judul"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$penerbit = htmlspecialchars($data["penerbit"]);
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	//insert data
	$query = "INSERT INTO form_buku VALUES ('', '$judul', '$pengarang', '$penerbit', '$gambar', CURRENT_TIMESTAMP(), '')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// fungsi upload -> untuk mengupload gambar kemudian melakukan format dan disimpan ke dalam folder upload
function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4){
		echo "<script>
				alert('gambar belum diupload');
			</script>
			";
	}

	// mengatur ekstensi file yang dibolehkan
	$ekstensiGambarValid = ['jpeg', 'jpg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	// jika eksteksi file tidak sesuai akan menampilkan alert
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('ekstensi gambar yang diperbolehkan adalah jpeg, jpg, png');
				document.location.href = 'index.php';
			</script>";
		return false;
	}

	// jika ukuran file tidak sesuai akan menampilkan alert
	if ($ukuranFile > 1500000) {
		echo "<script>
				alert(ukuran gambar terlalu besar!');
				document.location.href = 'index.php';
			</script>";
		return false;
	}

	// mengatur nama baru file
	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru .= $ekstensiGambar;

	// menyimpan file ke folder upload
	move_uploaded_file($tmpName, 'upload/'. $namaFileBaru);
	return $namaFileBaru;
}

// fungsi delete -> untuk menghapus data dari database sesuai dengan key(id_buku) yang dipilih
function delete($id_buku){
	global $conn;
	mysqli_query($conn, "DELETE FROM form_buku WHERE id_buku = $id_buku");
	return mysqli_affected_rows($conn); 
}

// fungsi edit -> untuk mengedit data dari database sesuai dengan key(id_buku) yang dipilih
function edit($data){
	global $conn;
	// menggunakan id_buku sebagai key
	$id_buku = $data["id_buku"];
	
	$judul = htmlspecialchars($data["judul"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$penerbit = htmlspecialchars($data["penerbit"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek jika user mengubah gambar
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}

	//update data  
	$query = "UPDATE form_buku SET 
				judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', gambar = '$gambar'
				WHERE id_buku = $id_buku
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function signup($data){
  global $conn;

  $username = $_POST['username'];
  $password = $_POST['password'];
  $submit = $_POST['submit'];

  $query = "INSERT INTO user VALUES ('', '$username', '$password')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
?>