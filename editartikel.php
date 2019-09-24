<?php

$server = "localhost";
$user = "root";
$password = "";
$database= "postingan";

$db = mysqli_connect($server, $user, $password, $database);

if ( !$db ){
  die("Gagal terhubung dengan database: ". mysqli_connect_error());}

if ( !isset($_GET['id']) ) {
  header('Location: pagingartikel.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM artikel WHERE id=$id";
$query = mysqli_query($db,$sql);
$artikel = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Edit Artikel</title>
  </head>
  <body>
    <header>
      <h3>Form Edit Artikel</h3>
    </header>
    <form action="simpaneditartikel.php" method="post">
        <input type="hidden" name="id" value="<?php echo $artikel['id']; ?>" />
        <label for="judul_artikel">Judul Artikel</label><br>

        <input type="text" name="judul_artikel" size="30" value="<?php echo $artikel['judul_artikel'] ?>"><br>

        <label for="isi_artikel">Isi Artikel</label><br>

        <textarea name="isi_artikel" cols="60" rows="10" ><?php echo $artikel['isi_artikel'] ?></textarea>

        <p><input type="file" name="images">
<input type="submit" name="simpan" value="Simpan" />
    </form>


  </body>
</html>
