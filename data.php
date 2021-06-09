<?php 
$koneksi= new mysqli("localhost", "root", "", "mahasiswa"); /* baris ini untuk menghubungkan kedatabase */

$cek=mysqli_query($koneksi, "SELECT * FROM datamahasiswa");



$w="INSERT INTO `datamahasiswa` (`npm`, `nama`, `nilai_bahasa`, `nilai_agama`, `nilai_mm`, `nilai_pkn`) VALUES
(1955201005, 'ERI YULIAN HIDAYAT', '80', '80', '80', '80'),
(1955201042, 'RIDHO IKRAM', '80', '80', '80', '80'),
(1955201057, 'RIFKI ARJUNDI', '80', '80', '80', '80'),
(1955201086, 'IKA YURIKA', '80', '80', '80', '80'),
(1955201096, 'TANIA FIRJINIA MAHESSA', '80', '80', '80', '80'),
(1955201100, 'ANISYAH OKTARIANI SUPRIYADY', '80', '80', '80', '80'),
(1955201101, 'ARIF SETIAWAN', '80', '80', '80', '80'),
(1955201066, 'JESTIKA SAFITRI', '80', '80', '80', '80');";
$q=$koneksi->query($w);

if ($q) { 
	echo "<br>";
	echo "data berhasil dimasukkan";
}
else{
echo "<br>";
	echo "data gagal dimasukkan dibuat";
}



 ?>




 <?php 


// JESTIKA SAFITRI(1955201066)

  ?>