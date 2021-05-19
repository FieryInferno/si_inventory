<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/tempusdominus-bootstrap-4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
  <table class="table table-bordered">
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
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/adminlte.min.js"></script>
</body>
</html>
