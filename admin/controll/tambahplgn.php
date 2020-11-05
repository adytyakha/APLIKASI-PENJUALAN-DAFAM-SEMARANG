<?php
error_reporting(0);
include("database.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {
// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
      	$Namapelanggan = $_POST['Namapelanggan'];
        $Alamat = $_POST['Alamat'];


        
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE Namapelanggan='$Namapelanggan'"));
 if ($cek > 0){
    echo "<script>window.alert('Data yang anda masukan sudah terdaftar')
    window.location='../tambahadmin.php'</script>";
    }else {

        // buat query
        // $sql = "INSERT INTO `member`(`nama_lengkap`, `alamat`,`username`, `password`, `asal_sekolah`, `hp`, `tglahir`, `agama`, `email`) 
        // VALUES ('$nama_lengkap','$alamat','$username','$password','$asal_sekolah','$hp','$tglahir','$agama','$email')";
        // $query = mysqli_query($link, $sql);




       $sql = "INSERT INTO `pelanggan`( `Nopelanggan`,`Namapelanggan`, `Alamat`) VALUES ( NULL, '$Namapelanggan', '$Alamat')";
 $query = mysqli_query($koneksi, $sql);
        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Menambah Pelanggan!");
                            window.location = "../pelanggan.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../tambahadmin.php"
                            </script>';
                    }
    }
}
?>