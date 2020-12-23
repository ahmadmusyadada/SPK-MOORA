<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$nama = $_POST['nama'];
// $jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$menu = $_POST['menu'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];
$pelayanan = $_POST['pelayanan'];
$tempat = $_POST['tempat'];

// if ($menu == 'ya') {
// 	$nmenu = 1;
// }else{
// 	$nmenu = 0;
// }
// if ($fasilitas == 'ya') {
// 	$nfasilitas = 1;
// }else{
// 	$nfasilitas = 0;
// }
// if ($harga == 'ya') {
// 	$nharga = 1;
// }else{
// 	$nharga = 0;
// }
// if ($pelayanan == 'fisik') {
// 	$npelayanan = 25;
// }else if ($pelayanan == 'phk'){
// 	$npelayanan = 25;
// }else{
// 	$npelayanan = 25;
// }
// if (!empty($tempat)) {
// 	echo $tempat;
// }else{
// 	echo "No";
// }

// sql
// $sql = "INSERT INTO tabel_resto (nama, jenis_kelamin, alamat,menu,fasilitas,harga,tempat,pelayanan)
// VALUES ('$nama', '$jenis_kelamin', '$alamat','$menu','$fasilitas','$harga','$tempat','$pelayanan')";

$sql = "INSERT INTO tabel_resto (nama, alamat, menu, fasilitas, harga, tempat, pelayanan)
VALUES ('$nama', '$alamat', '$menu','$fasilitas','$harga','$tempat','$pelayanan')";

if ($koneksi->query($sql) === TRUE) {
	//mengambil id siswa terkahir yang baru saja dimasukan
	$sqlIdakhir = "SELECT id_restoran FROM tabel_resto ORDER BY id_restoran DESC limit 1";
          $resultIdakhir = mysqli_query($koneksi, $sqlIdakhir);
              $hasil = mysqli_fetch_assoc($resultIdakhir);
              	$id_restoran = $hasil['id_restoran'];
              	
              	//insert data to table nilai.
              	$smenu = "INSERT INTO tabel_nilai (id_kriteria, id_restoran, nilai)
						VALUES ('1', '$id_restoran', '$nmenu')";
				$koneksi->query($smenu);

				$sfasilitas = "INSERT INTO tabel_nilai (id_kriteria, id_restoran, nilai)
						VALUES ('2', '$id_restoran', '$nfasilitas')";
				$koneksi->query($sfasilitas);

				$sharga = "INSERT INTO tabel_nilai (id_kriteria, id_restoran, nilai)
						VALUES ('3', '$id_restoran', '$nharga')";
				$koneksi->query($sharga);

				$stempat = "INSERT INTO tabel_nilai (id_kriteria, id_restoran, nilai)
						VALUES ('4', '$id_restoran', '$tempat')";
				$koneksi->query($stempat);

				$spelayanan = "INSERT INTO tabel_nilai (id_kriteria, id_restoran, nilai)
						VALUES ('5', '$id_restoran', '$npelayanan')";
				$koneksi->query($spelayanan);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_resto';</script>";
}

// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>