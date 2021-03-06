<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Edit Data Stok Barang </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin_gudang/stok_barang.html">Data Stok Barang</a></li>
            <li class="breadcrumb-item active">Edit Data Stok Barang</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <?php if ($this->session->pesan) echo $this->session->pesan; ?>
          <form action="<?= base_url('admin_gudang/stok_barang/edit/' . $id_barang); ?>" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Kode Barang</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Kode Barang" name="kode_barang" value="<?= $kode_barang; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Barang</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Nama Barang" name="nama_barang" value="<?= $nama_barang; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
                <select name="kategori" id="kategori" class="form-control" required>
                  <option>Pilih Kategori</option>
                  <?php
                    foreach ($id_kategori as $key) {
                      $selected = '';
                      if ($kategori == $key['id_kategori']) {
                        $selected = 'selected';
                      }
                      echo '<option value="' . $key['id_kategori'] . '" ' . $selected . '>' . $key['kode'] . '</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">QTY</label>
              <div class="col-sm-10">
                <input type="number" required class="form-control" id="staticEmail" placeholder="Masukan QTY" name="qty" value="<?= $qty; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Satuan</label>
              <div class="col-sm-10">
                <select name="satuan" id="satuan" class="form-control" required>
                  <option value="strip" <?= $satuan == 'strip' ? 'selected' : '' ; ?>>Strip</option>
                  <option value="botol" <?= $satuan == 'botol' ? 'selected' : '' ; ?>>Bolot</option>
                  <option value="tablet" <?= $satuan == 'tablet' ? 'selected' : '' ; ?>>Tablet</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="number" required class="form-control" id="staticEmail" placeholder="Masukan Harga" name="harga" value="<?= $harga; ?>">
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-success">Edit</button>
              <a href="<?= base_url(); ?>admin_gudang/stok_barang.html" class="btn btn-danger">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>