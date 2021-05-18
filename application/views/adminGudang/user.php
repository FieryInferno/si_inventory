<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Manajemen User </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Manajemen User</li>
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
          <form action="<?= base_url(); ?>admin_gudang/manajemen_user.html" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Nama Lengkap" name="namaLengkap">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
                <select name="role" id="role" class="form-control">
                  <option>Pilih Jabatan</option>
                  <option value="admin_gudang">Admin Gudang</option>
                  <option value="manager">Manager</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" required class="form-control" id="staticEmail" placeholder="Masukan Email" name="email">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Username" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" required class="form-control" id="staticEmail" placeholder="Masukan Password" name="password">
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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Nama Lengkap</th>
                  <th>level User</th>
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
                  foreach ($user as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['username']; ?></td>
                      <td><?= $key['email']; ?></td>
                      <td><?= $key['namaLengkap']; ?></td>
                      <td><?= $key['role']; ?></td>
                      <td><?= $key['created_date']; ?></td>
                      <td><?= $key['user_create']; ?></td>
                      <td><?= $key['modify_date']; ?></td>
                      <td><?= $key['user_modify']; ?></td>
                      <td>
                        <a class="btn btn-primary" href="<?= base_url('admin_gudang/manajemen_user/' . $key['id_user']); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url('admin_gudang/manajemen_user/hapus/' . $key['id_user']); ?>">Hapus</a>
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