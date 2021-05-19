<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Kategori </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Kategori</li>
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
          <form action="<?= base_url(); ?>admin_gudang/kategori.html" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Kode Kategori</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Kode Kategori" name="kode_kategori">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Kategori</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Nama Kategori" name="nama_kategori">
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-success">Tambah</button>
            </div>
          </form>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTables-example">
              <thead>
                <tr class="nowrap">
                  <th>No</th>       
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Created Date</th>
                  <th>Created By</th>
                  <th>Modify Date</th>
                  <th>Modify By</th>
                  <th>Aksi</th>
                </tr>   
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($kategori as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['kode']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['created_date']; ?></td>
                      <td><?= $key['user_create']; ?></td>
                      <td><?= $key['modify_date']; ?></td>
                      <td><?= $key['user_modify']; ?></td>
                      <td>
                        <a class="btn btn-primary" href="<?= base_url('admin_gudang/kategori/edit/' . $key['id_kategori']); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url('admin_gudang/kategori/hapus/' . $key['id_kategori']); ?>">Hapus</a>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>