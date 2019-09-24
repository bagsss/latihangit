<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<link rel="stylesheet" href="cobastyle.css" type="text/css">
</head>
<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<div class="pesanadmin">
		<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	</div>

	    <header>
	      <div class="row">
	        <img class="logo" src="logo.png">
	        <ul class="main-nav2">
	          <li class="active"><a href="">HOME</a></li>
	          <li><a href="about.html">ABOUT</a></li>
	          <li><a href="contact.html">CONTACT</a></li>
	          <li><a href="pagingartikel.php">ARTICLE</a></li>
	          <li><a href="logout.php">LOG OUT</a></li>

	        </ul>

	      </div>
	    </header>
			<article>
				<div class="buttonadmin">
          <a href="form_artikel.php" class="btn btn-satu">Buat Artikel</a>
          <a href="pagingartikel.php" class="btn btn-dua">Lihat Artikel Terdahulu</a>
        </div>
      </div>
			</article>
</body>
</html>
