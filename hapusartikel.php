<?php
include("koneksiartikel.php");

  if ( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $sql = "DELETE FROM artikel WHERE id=$id";
    $query = mysqli_query($db, $sql);
  } else {
    die("Akses dilarang...");
  }
  if ($query) {
    header('Location: pagingartikel.php');
  } else {
    die("Gagal Menghapus...");
  } ?>
