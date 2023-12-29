<?php /** @var TYPE_NAME $title */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/details_match.css">
    <link rel="stylesheet" href="../public/css/header_footer.css">
</head>
<body>

<?php include "layouts/Header.php"; ?>

<section class="container-fluid">
    <div class="row">
        <img src="../public/images/match.png" class="img_match" alt="image_match">
    </div>
    <div class="row mt-3">
        <div class="col-md-6 ps-5">
            <div class="ms-5">
                <h1>Morocco vs Canada</h1>
                <p class="match_stad_date">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                </p>
                <p class="match_stad_date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> December 01, 2022 · 20.00
                </p>
                <h5>Group : B</h5>
            </div>

        </div>
        <div class="col-md-6">
            <div class="mx-auto box_reserver">
                <div class="p-3">
                    <span>Tickets reserved</span> <br>
                    <strong>10 000</strong><br> <br>
                    <a href="#" class="btn btn-success">Reserve your E-tickets</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <h2 class="mb-5 text-center">Match informations</h2>
            <div class="col-md-6 ps-5 mb-5">
                <h3>Morocco</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet porttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.</p>
                <div class="ps-4">
                    <p><strong>Coach : </strong><span>Lorem</span></p>
                    <p><strong>Federation : </strong><span>Lorem</span></p>
                    <p>
                        <strong>Cups : </strong>
                        <img class="img_cups" src="../public/images/cup.png" alt="Cups">
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="../public/images/morocco.png">
            </div>
            <div class="col-md-6 ps-5">
                <h3>Morocco</h3>
                <p>Lorem ipsum dolor sit amet consectetur. Vel volutpat in risus leo erat. Morbi morbi nec urna tellus. Posuere nibh cum commodo quam gravida rhoncus. Tellus sem interdum hendrerit imperdiet maecenas nulla placerat risus. Lectus nullam parturient turpis eget aliquet porttitor lacus senectus massa. Dui nunc semper eget rhoncus. Vel sed dolor et amet tellus eget.</p>
                <div class="ps-4">
                    <p><strong>Coach : </strong><span>Lorem</span></p>
                    <p><strong>Federation : </strong><span>Lorem</span></p>
                    <p>
                        <strong>Cups : </strong>
                        <img class="img_cups" src="../public/images/cup.png" alt="Cups">
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="../public/images/morocco.png">
            </div>
        </div>
    </div>
</section>

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