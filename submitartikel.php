<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Geek Adventures</title>
    <link rel="stylesheet" href="cobastyle.css" type="text/css">
  </head>
  <body>
	<header>
        <img class="logo" src="logo.png">
		<div class="row">
		<ul class="main-nav2">
          <li class="active"><a href="index.php">HOME</a></li>
          <li><a href="aboutnot.html">ABOUT</a></li>
          <li><a href="contactnot.html">CONTACT</a></li>

        </ul>
		</div>
    </header>
    <article>

<?php

$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="postingan";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
mysqli_select_db($koneksi,$dbname);

$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d');
$foto = $_FILES['images']['name'];
$tmp = $_FILES['images']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

move_uploaded_file($tmp, $path);

$query = mysqli_query($koneksi,"INSERT INTO artikel VALUES ('','$judul','$isi','$tgl','$fotobaru')");
?>
<div class="pesansub">
  <?php
  if ($query) {

  echo 'Artikel Sudah dibuat dengan judul '.$judul ;
  }
  else
  {

  echo 'gagal membuat artikel dengan judul '.$judul ;

  mysqli_close($koneksi);
  }
  ?>
</div>

<div class="buttonarticle5">
  <a href="pagingartikel.php" class="btn btn-dua">Kembali</a>
</div>
</article>
</body>
</html>
