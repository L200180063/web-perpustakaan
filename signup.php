<?php
session_start();
require "function.php";

if (isset($_POST["submit"])){
  //cek jika data berhasil ditambahkan (jumlah data > 0 berarti sukses)
  if (signup($_POST) > 0){
    // menampilkan alert
    echo "
    <script>
      alert('Anda Berhasil Membuat Akun, sekarang masukkan kembali Username dan Password anda');
      document.location.href = 'login.php';
    </script>
    ";
  }else{ 
    echo "<script>
    alert('Data Gagal Ditambahkan');
      document.location.href = 'signup.php';
    </script>";
  }
}
?>
<!-- struktur HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ray's Bookstore | Sign Up</title>
  <!-- menghubungkan file "index.php" dengan "style.css" untuk mengatur tampilan -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/button.css">
  <style scoped>
  	/*@import "color.css";*/

  	body {
  		background: rgba(10,10,255,0.1);
  	}
  	input[type=text] {
  		outline: none;
  		transition: 0.5s;
  		background: rgba(240,240,255,1);
      border: 3px solid rgba(63, 63, 238,0.1);
  		/*border: 3px solid rgba(var(--biru),0.1);*/
  	}
  	input[type=text]:focus {
      border: 3px solid rgba(63, 63, 238,1);
  		/*border: 3px solid rgba(var(--biru),1);*/
  	}
  </style>
</head>
<body>
  <div class="full-h">
    <div class="login">
	    <header>Sign Up</header>
      <form action="signup.php" method="post">
        <input type="text" name="username" placeholder="Username Baru" required />
  	    <input type="text" name="password" placeholder="Password Baru" required />
  	    <input type="submit" name="submit" value="Sign Up" class="btn btn-biru">
      </form>
	    <!-- <input type="reset" value="Reset" class="btn btn-putih"> -->
	    <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
  </div>
  <!-- <footer>&copy;2022 Rayhand Pratama | XI-RPL 2</footer> -->
</body>
</html>