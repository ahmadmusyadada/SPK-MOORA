        <h3><i class="fa fa-angle-right"></i> List Restoran</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table" style="padding: 15px;">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Nama Restoran</th>
                    <th>Alamat</th>
          <?php
          $sqlNamakriteria = "SELECT * FROM tabel_kriteria ORDER BY id_kriteria ASC";
          $resultNamaKriteria = mysqli_query($koneksi, $sqlNamakriteria);
              while ($hasilNamaKriteria = mysqli_fetch_assoc($resultNamaKriteria)) {
          ?>
                    <th><?=$hasilNamaKriteria['kriteria']?></th>
          <?php
          }
          ?>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT * FROM tabel_resto";
          $result = mysqli_query($koneksi, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                  <tr class="gradeX">
                    <td><?=$row['nama']?></td>
                    <td><?=$row['alamat']?></td>
                    <td><?=$row['menu']?></td>
                    <td><?=$row['fasilitas']?></td>
                    <td><?=$row['harga']?></td>
                    <td><?=$row['pelayanan']?></td>
                    <td><?=$row['tempat']?></td>
                    <td class="hidden-phone">
                        <a href="index.php?module=update_restoran&id_resto=<?=$row['id_resto']?>"><button type="button" class="btn btn-warning"><i class="fa fa-cog"></i> Update</button></a>
                        <a href="index.php?module=hapus_resto&id_resto=<?=$row['id_resto']?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                    </td>
                  </tr>
          <?php
              }
          ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->