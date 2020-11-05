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
      	$Namabarang = $_POST['Namabarang'];
        $HargaBarang = $_POST['HargaBarang'];


        
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM barang WHERE Namabarang='$Namabarang'"));
 if ($cek > 0){
    echo "<script>window.alert('Data yang anda masukan sudah terdaftar')
    window.location='../tambahbarang.php'</script>";
    }else {

        // buat query
        // $sql = "INSERT INTO `member`(`nama_lengkap`, `alamat`,`username`, `password`, `asal_sekolah`, `hp`, `tglahir`, `agama`, `email`) 
        // VALUES ('$nama_lengkap','$alamat','$username','$password','$asal_sekolah','$hp','$tglahir','$agama','$email')";
        // $query = mysqli_query($link, $sql);




       $sql = "INSERT INTO `barang`( `Kodebarang`,`Namabarang`, `HargaBarang`) VALUES ( NULL, '$Namabarang', '$HargaBarang')";
 $query = mysqli_query($koneksi, $sql);
        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Menambah Barang!");
                            window.location = "../barang.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../barang.php"
                            </script>';
                    }
    }
}
?>