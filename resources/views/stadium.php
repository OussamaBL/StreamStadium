<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/stadium.css">
    <link rel="stylesheet" href="../public/css/header_footer.css">
</head>
<body>

<?php include "layouts/Header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <img src="../public/images/stad.jpg" class="img_match" alt="image_match">
    </div>
    <div class="row">
        <div class="col-12 ps-5 mt-4">
            <div class="ps-3">
                <h1>Al Thumama Stadium</h1>
                <p class="match_stad_date mt-4">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Thumama Stadium Building Number: 521 Street: 260 Zone: 46 Doha, Qatar
                </p>
                <p class="match_stad_date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> Capacity : 90 000
                </p>
                <p class="match_stad_date mb-5">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Doha
                </p>
                <h3>Description</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet porttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet porttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <h2 class="mb-5 text-center">The matchs of teams</h2>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="../public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="../public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="../public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="../public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <a href="#">
                    <img src="../public/images/match.png" width="100%" height="180px">
                </a>
                <div class="card_match">
                    <div class="my-auto mx-auto" style="flex-basis: 15%">
                        <span>12/01</span>
                    </div>
                    <div class="pt-3" style="flex-basis: 75%">
                        <strong>Morocco vs Senegal</strong>
                        <p class="match_stad_date">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "layouts/Footer.php" ?>


<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/ad5ea8d639.js" crossorigin="anonymous"></script>
</body>
</html>