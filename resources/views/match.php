<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles_footer.css">
    <link rel="stylesheet" href="../public/css/styles_header.css">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/match.css">
    <title><?= $title ?></title>
</head>
<body>

<?php include "layouts/Header.php"; ?>

<section>
<!-- recherche -->
        <div class="container">
            <div class="row d-flex justify-content-left align-items-center m-3">
    
                <div class="col-md-2">
                    <select id="filterCategory" class="form-select btn btn-danger dropdown-toggle dropdown-toggle-split" style="background-color: #FE7405;">
                        <option value="team">Team</option>    
                        <option value="all">All</option>
                        <option value="stadium">kxfkfkbgkf</option>
                        <option value="stadium">kxfkfkbgkf</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select id="filterCategory" class="form-select btn btn-danger dropdown-toggle dropdown-toggle-split" style="background-color: #FE7405;">
                        <option value="stadium">Stadium</option>
                        <option value="all">All</option>   
                        <option value="stadium">kxfkfkbgkf</option>
                        <option value="stadium">kxfkfkbgkf</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control" placeholder="match?">
                        <button class="btn btn-success">Search</button>
                    </div>
                </div>
            </div>
        </div>
<!-- carts -->
<div class="p-5 mb-3 m-5 text-black rounded" style="background-color: #FE7405;">
    <div class="">
    <div class="row row-cols-3 row-cols-md-3 g-5 m-5">
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Hollywood Sign on The Hill" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Palm Springs Road" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Los Angeles Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
            additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="../public/images/about_1.jpg" class="card-img-top"
            alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
            This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.
            </p>
        </div>
        </div>
    </div>
    
    </div>    
</div>
<!-- end carts -->

</section>

<?php include "layouts/Footer.php" ?>

<script src="../../public/js/sandbox.js"></script>

</body>
</html>