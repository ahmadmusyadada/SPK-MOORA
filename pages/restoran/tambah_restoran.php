<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Data Restoran</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Nilai</a>
    </li>
  </ul>
<form class="form-horizontal style-form" method="POST" action="pages/siswa/aksi_tambah.php">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Restoran</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Restoran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama">
          </div>
        </div>
        <!-- <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="jenis_kelamin" value="L" checked> Laki - Laki
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="jenis_kelamin" value="P"> Perempuan
              </label>
            </div>
          </div>
        </div> -->
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat </label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="alamat"></textarea>
          </div>
        </div>      
    </div>
    <div id="menu1" class=" tab-pane fade">
      <h3>Nilai</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Menu: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="menu" min="0">
          </div>
          <!-- <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="KPS" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="KPS" value="tidak"> Tidak
              </label>
            </div>
          </div> -->
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Fasilitas: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="fasilitas" min="0">
          </div>
          <!-- <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="PKH" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="PKH" value="tidak"> Tidak
              </label>
            </div>
          </div> -->
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Harga: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="harga" min="0">
          </div>
          <!-- <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="status" value="ya" checked> Ya
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="status" value="tidak"> Tidak
              </label>
            </div>
          </div> -->
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Pelayanan: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="pelayanan" min="0">
          </div>
          <!-- <div class="col-sm-10">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="ekonomi" value="fisik" checked> Kelainan Fisik 
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="ekonomi" value="phk"> PHK 
              </label>
              <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="ekonomi" value="terpidana"> Terpidana 
              </label>
            </div>
          </div> -->
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="tempat" min="0">
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