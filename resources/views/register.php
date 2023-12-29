<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../public/css/header_footer.css">

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
                <div class="col-md-7 py-5">
                    <h3>Create an account</h3>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="your name" id="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="age">Age</label>
                                    <input type="text" class="form-control" placeholder="18" id="age">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group first">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" placeholder="john@your-domain.com" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="lname">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="+212 000 000 000" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group last mb-3">
                                    <label for="re-password">Re-type Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="re-password">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Register" class="btn px-5 btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "layouts/Footer.php" ?>

<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/main.js"></script>

</body>
</html>