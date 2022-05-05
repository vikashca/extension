<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hyper Market Admin - Reset Password</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="#" />
  <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
  <meta name="author" content="#" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- icon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css" />
  <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body class="fix-menu">
  <section class="login common-img-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="login-card card-block auth-body mr-auto ml-auto">
            <form class="md-float-material">
              <div class="auth-box">
                <div class="text-center">
                  <img src="assets/images/logo.png" alt="logo" />
                </div>
                <div class="row m-b-20">
                  <div class="col-md-12">
                    <h3 class="text-left txt-primary">Reset Password</h3>
                  </div>
                </div>
                <hr />
                <div class="input-group input-group-primary">
                  <span class="input-group-addon">
                    <i class="icofont icofont-key"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="New Password" />
                </div>
                <div class="input-group input-group-primary">
                  <span class="input-group-addon">
                    <i class="icofont icofont-key"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Re-Enter New Password" />
                </div>
                <div class="row m-t-30">
                  <div class="col-md-12">
                    <button onclick="save()" class="btn btn-primary btn-md btn-block m-b-15" type="button">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<div id="save-modal" class="modal fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <h2><i class="fa fa-check text-primary"></i></h2>
        <p>Password Change Successfully!</p>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function save(){
    $('#save-modal').modal('show');

    setTimeout(function(){
      window.location.href="login.php";
    },1000);
  }
</script>