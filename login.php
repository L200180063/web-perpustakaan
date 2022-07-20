<?php
session_start();
require "function.php";

//menyembunyikan pesan error
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
global $conn;

$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if ($submit){
  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($query);
  if ($row['username'] != ""){
    //berhasil login
    $_SESSION['username'] = $row['username'];
    $_SESSION['status'] = $row['status'];
    ?>
    <script>
      alert ('Anda login sebagai <?php echo $row["username"]; ?>');
      document.location='admin.php';
    </script>
    <?php    
  }else{
    //gagal login
    ?>
    <script>
      alert ('Gagal Login, Username dan password anda salah');
      document.location='login.php';
    </script>
    <?php
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
  <title>Ray's Bookstore | Login</title>
  <!-- menghubungkan file "index.php" dengan "style.css" untuk mengatur tampilan -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/button.css">
  <style scoped>
  	/*@import "color.css";*/

  	body {
  		background: rgba(10,10,255,0.1);
  	}
  	input[type=text], input[type=password] {
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
	    <header>Login</header>
      <form method="post" action="login.php">
  	    <input type="text" name="username" placeholder="Username" />
  	    <input type="text" name="password" placeholder="Password" />
  	    <input type="submit" name="submit" value="Login" class="btn btn-biru">
      </form>
	    <!-- <input type="reset" value="Reset" class="btn btn-putih"> -->
	    <p>Belum punya akun? <a href="signup.php">Sign Up</a></p>
    </div>
  </div>
  <!-- <footer>&copy;2022 Rayhand Pratama | XI-RPL 2</footer> -->
</body>
</html>