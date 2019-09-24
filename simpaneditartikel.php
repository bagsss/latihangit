<?php
include("koneksiartikel.php");

if( isset($_POST['simpan']) ) {
  $id = $_POST['id'];
  $judulartikel = $_POST['judul_artikel'];
  $isiartikel = $_POST['isi_artikel'];
  $foto = $_FILES['images']['name'];
  $tmp = $_FILES['images']['tmp_name'];
  $fotobaru = date('dmYHis').$foto;
  $path = "images/".$fotobaru;

  move_uploaded_file($tmp, $path);

  $sql = "UPDATE artikel SET judul_artikel='$judulartikel', isi_artikel='$isiartikel', images='$fotobaru' WHERE id=$id";
  $query = mysqli_query($db, $sql);
} else {
  die("Akses dilarang...");
}

if ($query) {
  header('Location: pagingartikel.php');
} else {
  die("Gagal menyimpan perubahan...");
}
 ?>
