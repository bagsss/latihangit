<!DOCTYPE html>
<html>
<head>
	<title>Halaman SignUp</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<?php
	$koneksi = mysqli_connect("localhost","root","","user_level");

	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}


	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	  <header>
        <img class="logo" src="logo.png">
		<div class="row">
		<ul class="main-nav">
          <li class="active"><a href="index.php">HOME</a></li>
          <li><a href="aboutnot.html">ABOUT</a></li>
          <li><a href="contactnot.html">CONTACT</a></li>

        </ul>
		</div>
    </header>
<article>
	<div class="kotak_login">
		<p class="tulisan_login"></p>


		<form action="simpansignup.php" method="post">
      <label></label>
			<input type="text" name="nama" class="form_login" placeholder="Name" required="required">

      <label></label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">

			<label></label>
			<input type="password" name="password" class="form_login1" placeholder="Password" required="required">

      <label></label>
      <input type="hidden" name="level" class="form_login" placeholder="Name" value="user">
<p>
			<input type="submit" name="simpan" class="tombol_login" value="SignUp">
</p>

			<br/>
			<br/>
			<center>
			</center>
		</form>

	</div>
</article>

</body>
</html>
