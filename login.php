<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
</head>

<body class="bg-theme bg-theme3">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
  <div id="wrapper">

  <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
    <div class="card card-authentication1 mx-auto my-5">
      <div class="card-body">
      <div class="card-content p-2">
        <div class="text-center">
          <img src="assets/images/logo-icon.png" alt="logo icon">
        </div>
        <div class="card-title text-uppercase text-center py-3">サインイン！</div>


          <form name="form1" action="login_act.php" method="post">

            <div class="form-group">
            <label for="exampleInputUsername" class="sr-only">ID</label>
            <div class="position-relative has-icon-right">
              <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="IDを記入" name="lid">
              <div class="form-control-position">
                <i class="icon-user"></i>
              </div>
            </div>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword" class="sr-only">Password</label>
            <div class="position-relative has-icon-right">
              <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="パスワードを記入" name="lpw">
              <div class="form-control-position">
                <i class="icon-lock"></i>
              </div>
            </div>
            </div>
          <div class="form-row">
          <div class="form-group col-6">
            <div class="icheck-material-white">
          <input type="checkbox" id="user-checkbox" checked="" />
          <label for="user-checkbox">次から自動記入</label>

          </div>
        </div>
        <div class="form-group col-6 text-right">
          <a href="reset-password.html">パスワードをリセット</a>
        </div>
        </div>

        <!-- <button type="button" class="btn btn-light btn-block">サインイン</button> -->
        <button type="submit" class="btn btn-light btn-block">サインイン</button>
        
      </form>

      </div>
      </div>
      <div class="card-footer text-center py-3">
        <p class="text-warning mb-0"><a href="register.html">アカウントを新規作成</a></p>
      </div>
      </div>
    
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	
	</div>
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
