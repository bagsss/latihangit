<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OPREKER</title>
    <link rel="stylesheet" href="cobastyle.css" type="text/css">
  </head>
  <body>
    <header>
        <img class="logo" src="logo.png">
    </header>
	<article style="background:#5a5a5a">
	<div class="readmore">
  <?php
  include("koneksiartikel.php");

  $id = $_GET['id'];
  $sql = "SELECT * FROM artikel WHERE id=$id LIMIT 1";
  $query = mysqli_query($db, $sql);
  $r = mysqli_fetch_array($query); ?>
  <div class="judulonly">
    <?php
    echo "<h2>".$r['judul_artikel']."</h2>"; ?>
  </div>
  <div class="gambar">
    <img src="images/<?php echo $r['images']; ?>">
  </div>
  <div class="isiartikel3">
    <?php
    echo $r['isi_artikel'];
    ?>
  </div>
  <div class="buttonarticle2">
    <a href="artikeluser.php" class="btn btn-satu">kembali</a>
  </div>

</div>
	</article>
</html>
