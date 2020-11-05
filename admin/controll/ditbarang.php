<?php 
  include 'database.php'; 

       $Kodebarang= $_POST['Kodebarang'];
     $Namabarang = $_POST['Namabarang'];
        $HargaBarang = $_POST['HargaBarang'];
      
       



$sql = "UPDATE `barang` SET  `Kodebarang`='$Kodebarang',`Namabarang`='$Namabarang',`HargaBarang`='$HargaBarang' WHERE Kodebarang=$Kodebarang";

$query=mysqli_query($koneksi, $sql); 




          if($query){
            echo ' 
             <script>
                  alert("Berhasil Di edit!");
                  window.location = "../barang.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Di edit!");
                  window.location = "../barang.php"
                  </script>';
          }
       
     
 ?>










