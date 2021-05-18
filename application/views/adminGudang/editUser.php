<section class="content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><b><font face=""> Edit Manajemen User </font></b></h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin_gudang/manajemen_user.html">Manajemen User</a></li>
            <li class="breadcrumb-item active">Edit Manajemen User</li>
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
          <form action="<?= base_url('admin_gudang/manajemen_user/' . $id_user); ?>" method="post">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Nama Lengkap" name="namaLengkap" value="<?= $namaLengkap; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
                <select name="role" id="role" class="form-control">
                  <option>Pilih Jabatan</option>
                  <option value="admin_gudang" <?= $role == 'admin_gudang' ? 'selected' : '' ; ?>>Admin Gudang</option>
                  <option value="manager" <?= $role == 'manager' ? 'selected' : '' ; ?>>Manager</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" required class="form-control" id="staticEmail" placeholder="Masukan Email" name="email" value="<?= $email; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" required class="form-control" id="staticEmail" placeholder="Masukan Username" name="username" value="<?= $username; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="staticEmail" placeholder="Masukan Password" name="password">
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" class="btn btn-success">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>