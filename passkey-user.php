<?php
include_once("config.php");


echo date('d D M');

$user = kick($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/seodashlogo.png"/>
    <link rel="stylesheet" href="assets/css/styles.min.css"/>
    <link rel="stylesheet" href="passkey.css">
    <title>Document</title>
</head>
<body>
    <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="assets/images/logos/logo-light.svg" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Passkey</h5>
                <?php get_alert(); ?>
                    <div class="card">
                        <div class="card-body">
                            <h1>Hello, <?=$user['name']?></h1><br>
                            <h6>please enter passkey</h6>
                            <form action="passkey-user-action.php" method="post">
                                <div class="mb-3">
                                    <label for="textarea"></label>
                                    <textarea name="passkey" id="" class="form-control" cols="2" rows="1"></textarea>
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <input type="submit" class="btn btn-primary" name="submit">
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>

