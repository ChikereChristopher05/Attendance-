<?php
include_once ("config.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <?php get_alert(); ?>
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/logo-light.svg" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form action="authentication-register-action.php" method="post">
                  <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="mb-4">
                    <label for="confirm password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password">
                  </div>
                  <input class="btn btn-primary w-100 py-8 fs-4 mb-4" type="submit" name="register" value="Sign Up"></input>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="authentication-login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>