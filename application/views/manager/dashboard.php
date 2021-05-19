<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Laporan SI Inventory </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <a href="<?= base_url(); ?>manager/pdf.html" class="btn btn-success">PDF</a>
          <a href="<?= base_url(); ?>manager/excel.html" class="btn btn-primary">Excel</a>
        </div>
        <div class="card-body">
          <?php if ($this->session->pesan) echo $this->session->pesan; ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTables-example">
              <thead>
                <tr class="nowrap">
                  <th>No</th>     
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Satuan</th>
                  <th>Total Barang Keluar</th>
                  <th>Sisa Stok Bulan Ini</th>
                </tr>   
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($barang as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['nama_barang']; ?></td>
                      <td><?= "Rp " . number_format($key['harga'], 2, ',', '.'); ?></td>
                      <td><?= $key['satuan']; ?></td>
                      <td><?= $key['total_barang_keluar']; ?></td>
                      <td><?= $key['qty']; ?></td>
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