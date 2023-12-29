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
    <link rel="stylesheet" href="../public/css/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/register.css">
    <link rel="stylesheet" href="../public/css/profil.css">

    <title><?= $title ?></title>
</head>
<body>

<?php include "layouts/Header.php"; ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <div class="my-4">
                    <h2 class="h3 mb-6 page-title">User Profile</h2>
                    <hr class="my-1">
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="../public/images/person_4.jpg" alt="..." class="avatar-img rounded-circle" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-3">Brown Asher</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                    <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                    <p class="small mb-0 text-muted">(537) 315-1481</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary" style="background-color: #FE7405; color: #fff;">Upload New Photo</button>
                                <button type="submit" class="btn">Delete profile</button>
                            </div> 
                        </div>
                    </div>
                    <hr class="my-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">User Name</label>
                                <input type="text" id="name" class="form-control" placeholder="name">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="age">Age</label>
                                <input type="text" id="lastname" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputNationality">Nationality</label>
                                <input type="text" class="form-control" id="inputAddress5">
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Current Password</label>
                                <input type="text" id="currentPassword" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">New Password</label>
                                <input type="text" id="newPassword" class="form-control">
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Confirm New Password</label>
                                <input type="text" id="name" class="form-control" placeholder="name">
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary" style="background-color: #FE7405; color: #fff;">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "layouts/Footer.php" ?>



</body>
</html>