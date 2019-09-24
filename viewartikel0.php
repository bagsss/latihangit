<html>
<head>
</head>
<body>
<p>
<a href="indexartikel.php">Kembali</a>
</p>
<br>
<?php


//buat dulu koneksi kedatabase

$server = "localhost";
$user = "root";
$password = "";
$database= "postingan";

$db = mysqli_connect($server, $user, $password, $database);

if ( !$db ){
  die("Gagal terhubung dengan database: ". mysqli_connect_error());
}

$query = mysqli_query($db,"select * from artikel");
$cek = mysqli_num_rows($query);

if ( $cek == 0) {


//tampilkan pesan kalau artikel belum ada

echo 'maaf, belum ada artikel';
}
else
{


//buat pengulangan untuk menampilkan data artikel dengan
//menggunakan while dan definisikan kedalam variabel data

while ($data = mysqli_fetch_array($query))
{
  //kita akan menampilkan judul artikel

  echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';



  //tampilkan tanggal pembuatan artikel
  //gunakan fungsi strtotime untuk merubah bentuk date
  //kedalam bentuk string

  echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';


  //menampilkan isi artikel yang sudah kita buat

  echo '<p>'.$data['isi_artikel'].'</p>';

  echo '<p>'.$data['id'].'</p>';
  echo "<tr>";
  echo "<td>";
  echo "<a href='hapusartikel.php?id=".$data['id']."'>Hapus</a>";
  echo "<a href='editartikel.php?id=".$data['id']."'>Edit</a>";
  echo "</td>";
  echo "</tr>";
  }
  }


  //tutup koneksi database

  mysqli_close($db);
  ?>
  </body>
  </html>
