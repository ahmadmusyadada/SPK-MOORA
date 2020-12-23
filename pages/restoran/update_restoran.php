<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Data Diri</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Nilai</a>
    </li>
  </ul>

<?php
$id_resto = $_GET['id_resto'];
$sql = "SELECT * FROM tabel_resto WHERE id_resto = $id_resto";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form class="form-horizontal style-form" method="POST" action="pages/restoran/aksi_edit.php?id_resto=<?=$id_resto?>">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Diri</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama </label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama" value="<?=$row['nama']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat </label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="alamat"><?=$row['alamat']?></textarea>
          </div>
        </div>      
    </div>
    <div id="menu1" class=" tab-pane fade">
      <h3>Nilai</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Menu : </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="menu" min="0" step="100" value="<?=$row['menu']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Fasilitas : </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="fasilitas" min="0" step="100" value="<?=$row['fasilitas']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Harga : </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="harga" min="0" step="100" value="<?=$row['harga']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Pelayanan : </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="pelayanan" min="0" step="100" value="<?=$row['pelayanan']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="tempat" min="0" step="100" value="<?=$row['tempat']?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-theme03">Masukan</button>
            <button type="reset" class="btn btn-theme04">Reset</button>
          </div>
        </div>
      
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>

  </form>