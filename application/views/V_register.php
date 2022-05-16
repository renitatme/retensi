<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Retensi | Register</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?=base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">
</head>

<?php if(isset($_SESSION['regisFail'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Terjadi Kesalahan !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } unset($_SESSION['regisFail']);?>

<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<!-- <a href="#"><b>TITLE</b></a> -->
<p>Register</p>
</div>
<!-- /.login-logo -->
<div class="card">
<div class="card-body login-card-body">

    <form action="<?=base_url()."C_Auth/registerAksi"?>" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" 
        name="username" placeholder="Username" required>
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" 
        name="password" placeholder="Password" required>
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="password" class="form-control" 
        name="password2" placeholder="Konfirmasi Password" required>
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
        </div>
    </div>

        <div class="social-auth-links text-center mb-3">
            <button type="submit" class="btn btn-danger btn-block">
                Register
            </button>
        </div>
    </form>

</div>
<!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
