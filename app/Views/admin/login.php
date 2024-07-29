<?= $this->extend('layout/login'); ?>

<?= $this->section('content'); ?>
<!-- Background -->
<div class="account-pages"></div>
<!-- Begin page -->
<div class="wrapper-page">

  <div class="card">
    <div class="card-body">

      <h3 class="text-center m-0">
        <a href="index.html" class="logo logo-admin"><img src="<?= base_url('himo/images/logohimoo.png') ?>" height="200" alt="logo"></a>
      </h3>

      <div class="p-3">
        <h4 class="text-muted font-18 m-b-5 text-center">Selamat Datang</h4>
        <p class="text-muted text-center">Himpunan Musyawarah Osis Sidoarjo</p>

        <form method="POST" action="<?= base_url('/aksilogin') ?>">

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="user" placeholder="Enter username">
          </div>

          <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="password" class="form-control" id="userpassword" name="pass" placeholder="Enter password">
          </div>

          <div class="form-group row m-t-20">

            <div class="col-6 text-right">
              <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
            </div>
          </div>

          <div class="form-group m-t-10 mb-0 row">
            <div class="col-12 m-t-20">
              <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

  <div class="m-t-40 text-center">
    <p class="text-white-50">Don't have an account ? <a href="pages-register.html" class="text-white"> Signup Now </a> </p>
    <p class="text-muted">© 2018 Agroxa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
  </div>

</div>

<!-- END wrapper -->
<?= $this->endSection(); ?>