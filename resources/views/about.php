<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/styles_footer.css">
    <link rel="stylesheet" href="../public/css/styles_header.css">

    <title><?= $title ?></title>
</head>
<body>

<?php include "layouts/Header.php"; ?>
<div class="site-wrap">

<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('../public/images/afcon-tickets.png');
    height: 400px;
  ">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
    </div>
  </div>
</div>

<div class="site-section" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 m-2">
        <img src="../public/images/africa.png" alt="Image" class="img-fluid">
      </div>
    <div class="col-md-5 m-2 pl-md-5">
      <h2 class="text-black">About Sports</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis inventore eius, doloremque fugiat id laudantium. Delectus quisquam voluptates deleniti incidunt, iusto magni mollitia rerum! Ex perspiciatis incidunt, laborum repellat illo.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo maxime eligendi sunt autem consequuntur minima, quidem iure, nisi laboriosam, nam nostrum saepe voluptatibus repellat quam reiciendis. Accusantium omnis facilis eligendi.</p>
      <p class="mb-0"><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm" style="background-color: #FE7405; color: #fff;">Read More</a></p>
    </div>
  </div>
</div>

<div class="site-section" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2">
        <img src="../public/images/marocteam.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 pr-md-5">
        <h2 class="text-black">Dedicated Team</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis inventore eius, doloremque fugiat id laudantium. Delectus quisquam voluptates deleniti incidunt, iusto magni mollitia rerum! Ex perspiciatis incidunt, laborum repellat illo.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo maxime eligendi sunt autem consequuntur minima, quidem iure, nisi laboriosam, nam nostrum saepe voluptatibus repellat quam reiciendis. Accusantium omnis facilis eligendi.</p>
        <p class="mb-0"><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm" style="background-color: #FE7405; color: #fff;">Read More</a></p>
      </div>
    </div>
  </div>
</div>

  <div class="site-section feature-blocks-1 no-margin-top">
    <div class="container">
      <div class="row mb-5">

        <div class="col-md-12 m-5 text-center">
          <h2 class="text-black">Match Highlights</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="100">
            <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('../public/images/cop2.jpg');">
              <div class="text">
                <h2 class="h5 text-white">Afric Cup Championship</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                <p class="mb-0"><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="100">
            <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('../public/images/cop2.jpg');">
              <div class="text">
                <h2 class="h5 text-white">Afric Cup Championship</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                <p class="mb-0"><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="100">
            <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('../public/images/cop2.jpg');">
              <div class="text">
                <h2 class="h5 text-white">Afric Cup Championship</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                <p class="mb-0"><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "layouts/Footer.php" ?>

<script src="../public/js/bootstrap.bundle.min.js"></script>

<script src="../../public/js/sandbox.js"></script>
    
</body>
</html>