<?php 
  include('database.php');
  $id_data = $_GET['id_data'];
  $query = mysqli_query($koneksi, "DELETE FROM data_kfi WHERE id_data= '$id_data' ");
  if($query){
    echo '
      <script>
      alert("Barang berhasil dihapus !");
      window.location = "../barang.php";
      </script>
    ';
  }

 ?>
