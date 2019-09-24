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
<div class="formart">
  <form method="post" name="posting_form" action="submitartikel.php" enctype="multipart/form-data">
  Judul Artikel<br><br>
  <input type="text" name="judul_artikel" size="30"><br><br><br>
  Isi Artikel<br><br>
  <textarea name="isi_artikel" cols="60" rows="10"></textarea><br>
  Gambar
  <input type="file" name="images">
</div>
  <div class="buttonarticle1">
    <input class="btn1 btn-tiga" type="submit" name="submitartikel" value="submit artikel">
    <a href="halaman_admin.php" class="btn btn-dua">Kembali</a>
  </div>
  </form>
</article>
</body>
</html>
