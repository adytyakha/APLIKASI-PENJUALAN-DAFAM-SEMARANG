<?php 
  include('database.php');
  $Nopelanggan = $_GET['Nopelanggan'];
  $query = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE Nopelanggan= '$Nopelanggan' ");
  if($query){
    echo '
      <script>
      alert("Pelanggan berhasil dihapus !");
      window.location = "../pelanggan.php";
      </script>
    ';
  }

 ?>
