<?php
$koneksi = mysqli_connect("localhost","root","","user_level");

if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}

if( isset($_POST['simpan']) ) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  $sql = "INSERT INTO user (nama, username, password, level) VALUE ('$nama', '$username', '$password','$level')";
  $query = mysqli_query($koneksi, $sql);

} else {
  die("Akses dilarang...");
}

if ( $query ) {
  header('Location: index.php?status=sukses');
} else {
  header('Location: index.php?status=gagal');
}
?>
 ?>
