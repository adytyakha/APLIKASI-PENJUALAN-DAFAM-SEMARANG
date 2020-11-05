<?php 
  include 'database.php'; 

       $Nopelanggan= $_POST['Nopelanggan'];
     $Namapelanggan = $_POST['Namapelanggan'];
        $Alamat = $_POST['Alamat'];
      
       



$sql = "UPDATE `pelanggan` SET  `Nopelanggan`='$Nopelanggan',`Namapelanggan`='$Namapelanggan',`Alamat`='$Alamat' WHERE Nopelanggan=$Nopelanggan";

$query=mysqli_query($koneksi, $sql); 




          if($query){
            echo ' 
             <script>
                  alert("Berhasil Di edit!");
                  window.location = "../pelanggan.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Di edit!");
                  window.location = "../pelanggan.php"
                  </script>';
          }
       
     
 ?>










