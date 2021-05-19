<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Data Barang Masuk </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Barang Masuk</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <a class="btn btn-success" href="<?= base_url(); ?>admin_gudang/barang_masuk/tambah.html">Tambah</a>
        </div>
        <div class="card-body">
          <?php if ($this->session->pesan) echo $this->session->pesan; ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTables-example">
              <thead>
                <tr class="nowrap">
                  <th>No</th>   
                  <th>Tanggal Masuk</th>    
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Kategori</th>
                  <th>QTY</th>
                  <th>Satuan</th>
                  <th>Tanggal Kadaluwarsa</th>
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
                  foreach ($barang as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['tanggal_masuk']; ?></td>
                      <td><?= $key['kode_barang']; ?></td>
                      <td><?= $key['nama_barang']; ?></td>
                      <td><?= $key['kategori']; ?></td>
                      <td><?= $key['qty']; ?></td>
                      <td><?= $key['satuan']; ?></td>
                      <td><?= $key['tanggal_kadaluwarsa']; ?></td>
                      <td><?= $key['created_date']; ?></td>
                      <td><?= $key['user_create']; ?></td>
                      <td><?= $key['modify_date']; ?></td>
                      <td><?= $key['user_modify']; ?></td>
                      <td>
                        <a class="btn btn-primary" href="<?= base_url('admin_gudang/barang_masuk/edit/' . $key['id_barang_masuk']); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url('admin_gudang/barang_masuk/hapus/' . $key['id_barang_masuk']); ?>">Hapus</a>
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