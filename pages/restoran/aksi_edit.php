<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$menu = $_POST['menu'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];
$pelayanan = $_POST['pelayanan'];
$tempat = $_POST['tempat'];
$id_resto = $_GET['id_resto'];


if ($menu == 'ya') {
	$nmenu = 1;
}else{
	$nmenu = 0;
}
if ($fasilitas == 'ya') {
	$nfasilitas = 1;
}else{
	$nfasilitas = 0;
}
if ($harga == 'ya') {
	$nharga = 1;
}else{
	$nharga = 0;
}
if ($pelayanan == 'fisik') {
	$npelayanan = 25;
}else if ($pelayanan == 'phk'){
	$npelayanan = 25;
}else{
	$npelayanan = 50;
}
if (!empty($tempat)) {
	echo $tempat;
}else{
	echo "No";
}

 // echo $nmenu."<br>";
 // echo $nfasilitas."<br>";
 // echo $nharga."<br>";
 // echo $npelayanan."<br>";
 // echo $tempat."<br>";


	//mengambil id siswa terkahir yang baru saja dimasukan
              	
              	// insert data to table nilai.
              	$smenu ="UPDATE tabel_nilai SET nilai = '$nmenu' WHERE id_kriteria='1' AND id_resto = '$id_resto'; ";
				$koneksi->query($smenu);

				$sfasilitas ="UPDATE tabel_nilai SET nilai = '$nfasilitas' WHERE id_kriteria='2' AND id_resto = '$id_resto'; ";
				$koneksi->query($sfasilitas);

				$sharga ="UPDATE tabel_nilai SET nilai = '$nharga' WHERE id_kriteria='3' AND id_resto = '$id_resto'; ";
				$koneksi->query($sharga);

				$stempat ="UPDATE tabel_nilai
                        SET nilai = '$tempat'
                        WHERE id_kriteria='4' AND id_resto = '$id_resto'; ";
				$koneksi->query($stempat);

				$spelayanan ="UPDATE tabel_nilai
                        SET nilai = '$npelayanan'
                        WHERE id_kriteria='5' AND id_resto = '$id_resto'; ";
                $koneksi->query($spelayanan);
                
                $sqlSiswa = "UPDATE tabel_resto SET nama= '$nama', jenis_kelamin='$jenis_kelamin',alamat='$alamat',menu='$menu',fasilitas='$fasilitas',
                            harga='$harga',tempat='$tempat',pelayanan='$pelayanan' WHERE id_resto = '$id_resto' ";
                $koneksi->query($sqlSiswa);

				echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_siswa';</script>";


// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>