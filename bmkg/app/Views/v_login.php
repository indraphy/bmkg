
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url() ?>" class="h1"><b>SIPSI</a>
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg">Silahkan masuk untuk memulai sesi</p> -->
        
       <?php 
        $errors = session()->getFlashdata('errors');
        if(!empty($errors)){ ?>
        <div class="alert alert-danger alert-dismissible" style="padding-bottom: 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
            <?php foreach($errors as $key => $value){ ?>
               <h6 style="font-size: medium;"><li> <?= esc($value) ?></li></h6>
            <?php  } ?>
            </ul>
             </div>
       <?php } 
        ?>
        <h6 style="font-size: medium;" ><?php 
        if (session()->getFlashdata('pesan')) { 
            echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?></h6>
       
      <?php echo form_open('Auth/login') ?>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                <h5 style="font-size: medium;">Remember Me</h5>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close() ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
</body>
</html>
