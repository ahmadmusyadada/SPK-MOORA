<?php
$mysqli = new mysqli("localhost", "root", "", "db_moora");
if($mysqli->connect_error) {
  exit('Could not connect');
}


?>

<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nilai</th>
                    <!-- <th>Status</th> -->
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT tabel_resto.nama,tabel_resto.alamat,tabel_hasil.nilai FROM tabel_hasil join tabel_resto ON tabel_hasil.id_siswa = tabel_resto.id_siswa WHERE tabel_hasil.tanggal = ? ORDER BY tabel_hasil.nilai DESC";
        //   $result = mysqli_query($koneksi, $sql);

        //   $sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
        //   FROM customers WHERE customerid = ?";
          
          $stmt = $mysqli->prepare($sql);
          $stmt->bind_param("s", $_GET['q']);
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($nama, $jenis_kelaim, $alamat, $nilai);
          $stmt->fetch();
          $stmt->close();

        //   $tanda = 1;
        //       while ($row = mysqli_fetch_assoc($result)) {
                  
          ?>
                  <tr class="gradeX">
                    <td><?=$nama?></td>
                    <td><?=$jenis_kelaim?></td>
                    <td><?=$alamat?></td>
                    <td><?=$nilai?></td>
                    
                  </tr>
          <?php
            //     $tanda++;
            //   }
          ?>
                </tbody>
              </table>