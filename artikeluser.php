<?php
include 'koneksiartikel.php';
?>
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
      <img class="logo" src="logo.png">
      <ul class="main-nav2">
        <li><a href="halaman_user.php">HOME</a></li>
        <li><a href="aboutuser.html">ABOUT</a></li>
        <li><a href="contactuser.html">CONTACT</a></li>
        <li class="active"><a href="artikeluser.php">ARTICLE</a></li>
        <li><a href="logout.php">LOG OUT</a></li>

      </ul>

    </div>
  </header>
  <article>
  <div class="pesanart">
  <?php
  $halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($db, "SELECT * FROM artikel");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);
  $query = mysqli_query($db,"select * from artikel LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;


  while ($data = mysqli_fetch_assoc($query)) {

    ?>

  <?php
echo '<p><strong>'.$data['judul_artikel'].'</strong></p><br>';
echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p><br>';
echo substr('<p>'.$data['isi_artikel'],0 ,50).' ....'.'</p>' ;

echo "<br>[<a href='artikelusermore.php?id=".$data['id']."'>Read More &nbsp</a>]<hr/> |";
}
?>
</div>
    <?php

  ?>

</table>

<div class="page">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

  <?php } ?>

</div>
</article>
</body>
</html>
