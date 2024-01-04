<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles_footer.css">
    <link rel="stylesheet" href="../public/css/styles_header.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../public/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/register.css">
    
    <title><?= $title ?></title>
</head>
<body>

<?php include "layouts/Header.php"; ?>

<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('../public/images/uzearm4f5cd8pixydo0t.png');"></div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 py-5 mb-5">
                    <h3>Login</h3>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group first">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" placeholder="john@your-domain.com" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn px-5 btn-primary" style="background-color: #FE7405;">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

<?php include "layouts/Footer.php" ?>

<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>

<script src="../public/js/sandbox.js"></script>

</body>
</html>