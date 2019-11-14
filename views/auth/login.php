<?php
require_once "../../_config/config.php";
  if(isset($_SESSION['user']) ) 
      echo "<script>window.location='".base_url()."';</script>"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rumah Sakit</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url('_assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="icon" href="<?=base_url('_assets/img/logo.png');?>">
  <!-- Custom styles for this template-->
  <link href="<?=base_url('_assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="ro w">

              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1><hr>
                    <?php
                        if (isset($_POST['login'])) {
                          $user = trim(mysqli_real_escape_string($conn, $_POST['username']));
                          $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['password'])));
                          $query = "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'";
                          $sql_login = mysqli_query($conn, $query) or die(mysqli_error($conn));
                          if (mysqli_num_rows($sql_login) > 0) {
                            $_SESSION['user'] = $user;
                            echo "<script>window.location='" . base_url('views/dashboard/index.php') . "'</script>";

                        } else {?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Login Gagal!</strong> Username / Password Salah.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>    
                        <?php }
                        }
                      ?>
                  <hr>
                </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" placeholder="Enter Username..." name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>

                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('_assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?=base_url('_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('_assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('_assets/js/sb-admin-2.min.js')?>"></script>

</body>

</html>
