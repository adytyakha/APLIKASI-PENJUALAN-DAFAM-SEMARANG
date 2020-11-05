<?php 
  include('database.php');
  $Kodebarang = $_GET['Kodebarang'];
  $query = mysqli_query($koneksi, "DELETE FROM barang WHERE Kodebarang= '$Kodebarang' ");
  if($query){
    echo '
      <script>
      alert("Barang berhasil dihapus !");
      window.location = "../barang.php";
      </script>
    ';
  }

 ?>
