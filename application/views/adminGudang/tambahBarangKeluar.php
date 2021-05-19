<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Tambah Barang Keluar </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin_gudang/barang_keluar.html">Data Barang Keluar</a></li>
            <li class="breadcrumb-item active">Tambah Barang Keluar</li>
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
          <form action="<?= base_url('admin_gudang/barang_keluar/tambah.html'); ?>" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Keluar</label>
              <div class="col-sm-10">
                <input type="date" required class="form-control" id="staticEmail" placeholder="Masukan Tanggal Keluar" name="tanggal_keluar">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Kode Barang</label>
              <div class="col-sm-10">
                <select name="id_barang" id="id_barang" class="form-control">
                  <option>Pilih Kode Barang</option>
                  <?php
                    foreach ($barang as $key) {
                      echo '<option value="' . $key['id_barang'] . '">' . $key['kode_barang'] . '</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">QTY</label>
              <div class="col-sm-10">
                <input type="number" required class="form-control" id="staticEmail" placeholder="Masukan QTY" name="qty">
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="<?= base_url(); ?>admin_gudang/barang_keluar.html" class="btn btn-danger">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>