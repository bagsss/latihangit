<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Geek Adventures</title>
    <link rel="stylesheet" href="cobastyle.css" type="text/css">
  </head>
<body>
  <header>
    <div class="row">
      <div class="logo">
      <img src="logo2.png">
      </div>
      <ul class="main-nav2">
        <li><a href="">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="article.html">ARTICLE</a></li>
        <li><a href="logout.php">LOG OUT</a></li>

      </ul>

    </div>
  </header>

  <article>
      <div class="buttonarticle2">
        <a href="halaman_admin.php" class="btn btn-satu">kembali</a>
      </div>
    </div>

    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database= "postingan";

    $db = mysqli_connect($server, $user, $password, $database);

    if ( !$db ){
      die("Gagal terhubung dengan database: ". mysqli_connect_error());
    }

    $query = mysqli_query($db,"select * from artikel limit 3");
    $cek = mysqli_num_rows($query);
    ?>
    <div class="pesanart">
      <?php
      if ( $cek == 0) {
      echo 'maaf, belum ada artikel';
      }
      else
      {
      while ($data = mysqli_fetch_array($query))
      {
        echo '<p><strong>'.$data['judul_artikel'].'</strong></p><br>';
        echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p><br>';
        echo substr('<p>'.$data['isi_artikel'],0 ,50).'</p>';

        echo "... <br>[<a href='artikel.php?id=".$data['id']."'>Read More &nbsp</a>]<hr/> |";

        echo "<a href='hapusartikel.php?id=".$data['id']."'>Hapus &nbsp</a> |";
        echo "<a href='editartikel.php?id=".$data['id']."'>Edit</a> |<br><br>";
        }
        }
        mysqli_close($db);
        ?>
    </div>

  </article>
  </body>
  </html>
