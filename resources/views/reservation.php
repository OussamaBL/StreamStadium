<?php /** @var TYPE_NAME $title */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/reservation.css">
    <link rel="stylesheet" href="../public/css/header_footer.css">
</head>
<body>

<?php include "layouts/Header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <img src="../public/images/match.png" class="img_match" alt="image_match">
    </div>
    <div class="row pt-5">
        <div class="col-md-6 text-center">
            <img src="../public/images/stade_ticket.png" class="img_stade_ticket">
        </div>
        <div class="col-md-6 ps-5">
            <div>
                <h1>Morocco vs Canada</h1>
                <p class="match_stad_date">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                </p>
                <p class="match_stad_date">
                    <i class="fa fa-calendar" aria-hidden="true"></i> December 01, 2022 · 20.00
                </p>
            </div>
            <div>
                <div class="d-flex">
                    <div class="color_category" style="background-color: rgb(133, 156, 219);"></div>
                    <div> Category 3
                        <span class="price_ticket">30$</span>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="color_category" style="background-color: rgb(114, 21, 197);"></div>
                    <div> Category 2
                        <span class="price_ticket">40$</span>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="color_category" style="background-color: rgb(210, 66, 13);"></div>
                    <div> Category 1
                        <span class="price_ticket">50$</span>
                    </div>
                </div>
            </div>

            <div class="d-flex mt-3" style="gap: 55px">
                <div class="text-center">
                    <strong>Category 3</strong>
                    <span class="input-wrapper tickets_qte mt-2">
                      <button class="decrement" id="decrement">-</button>
                      <input type="number" class="quantity" value="0" name="catg3_price" id="quantity qte_ticket_catg3" />
                      <button class="increment" id="increment">+</button>
                    </span>
                </div>
                <div class="text-center">
                    <strong>Category 2</strong>
                    <span class="input-wrapper tickets_qte mt-2">
                      <button class="decrement" id="decrement">-</button>
                      <input type="number" class="quantity" value="0" name="catg2_price" id="quantity qte_ticket_catg2" />
                      <button class="increment" id="increment">+</button>
                    </span>
                </div>
                <div class="text-center">
                    <strong>Category 1</strong>
                    <span class="input-wrapper tickets_qte mt-2">
                      <button class="decrement" id="decrement">-</button>
                      <input type="number" class="quantity" value="0" name="catg1_price" id="quantity qte_ticket_catg1" />
                      <button class="increment" id="increment">+</button>
                    </span>
                </div>
            </div>
            <div class="mt-4">
                <h4>Total Price : <span id="price_total">0$</span></h4>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-success" style="width: 200px">Reserver</button>
        </div>

    </div>
    <div class="container mt-5">
        <h3 class="text-center">Match information</h3>
        <div class="row mt-5">

            <div class="col-md-4">
                <img src="../public/images/morocco.png" class="">
                <h3 class="text-center mt-3">Morocco</h3>
            </div>
            <div class="col-md-4 text-center my-auto">
                <div>
                    <p class="match_stad_date">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Al Thumama Stadium
                    </p>
                    <h1>VS</h1>
                    <p class="match_stad_date">
                        <i class="fa fa-calendar" aria-hidden="true"></i> December 01, 2022 · 20.00
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../public/images/morocco.png" class="">
                <h3 class="text-center mt-3">Morocco</h3>
            </div>
        </div>
    </div>
</div>

<?php include "layouts/Footer.php" ?>

<script src="../public/js/jquery-3.7.1.min.js"></script>
<script src="../public/js/reservation.js"></script>
<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/ad5ea8d639.js" crossorigin="anonymous"></script>
</body>
</html>