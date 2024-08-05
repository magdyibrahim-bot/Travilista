<?php
require_once ('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="travel deals,destinations,travel tips,hotels,activities,travel blog,flights,trips,stv,jvhtgdsjh,transportaion,backdegs,travelista">
    <link rel="icon" href="./images/logo-6.png" type="image/x-icon">
    <title>Travilista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/stars.css">
</head>
<?php 
     $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
     $languages = parse_ini_file("languages/$lang.ini");
    ?>

<body>
    <?php if (is_logged_in()) { ?>
        <nav>
            <div class="nav__logo">
                <a href="index.php"><img src="./images/logo.png" alt="" class="logo"></a>
            </div>
            <ul class="nav__links">
            
                <li class="link"><a href="index.php#about-us"><?= $languages['About'] ?></a></li>
                <li class="link"><a href="index.php#services">Services</a></li>
                <li class="link"><a href="index.php#footer" id="nav__btn">Contact</a></li>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-list" style="color:#97660e;font-size:20px;"></i>
                    <!-- <img src="images/logo-6.png" class="navbar-toggler-icon"></img> -->
                </button>
                <div  class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    style="background-color:#97660e !important; width:20% !important;" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <img style="width:60%;" src="images/logo-3.png" class="offcanvas-title"
                            id="offcanvasDarkNavbarLabel">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" >
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="transport.php">
                                    <i class="fas fa-car"></i> Transportations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="trips.php">
                                    <i class="fas fa-plane"></i> Trips
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hotels.php">
                                    <i class="fas fa-hotel"></i> Hotels
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="timeline.php">
                                    <i class="fas fa-home"></i> AIR BNB
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="medical.php">
                                <i class="fa-solid fa-notes-medical"></i> Medical Tourism
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="backages.php">
                                    <i class="fas fa-box"></i> Packages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="form.php">
                                    <i class="fas fa-box"></i> Create my own Package
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">
                                    <i class="fas fa-shopping-cart"></i> View Cart
                                </a>
                            </li>
                            
                        </ul>
                        <button style="background-color: white;" class="btn btn-success" type="submit"><a
                                style="text-decoration: none; color: #97660e;" href="./files/logout.php">Logout</a></button>
                    </div>
                </div>
            </ul>
        </nav>
    <?php } else { ?>
        <nav>
    <div class="nav__logo">
        <a href="index.php"><img src="./images/logo.png" alt="" class="logo"></a>
    </div>
    <ul class="nav__links">
        <li class="link"><a href="index.php#about-us"><?= $languages['About'] ?></a></li>
        <li class="link"><a href="index.php#services"><?= $languages['Services'] ?></a></li>
        <li class="link"><a href="index.php#contact"><?= $languages['Contact'] ?></a></li>
        <?php if (is_logged_in()) { ?>
            <li class="link"><a href="logout.php"><?= $languages['Logout'] ?></a></li>
        <?php } else { ?>
            <li class="link"><a href="#" data-toggle="modal" data-target="#loginModal"><?= $languages['Login'] ?></a></li>
            <li class="link"><a href="#" data-toggle="modal" data-target="#signModal"><?= $languages['Signup'] ?></a></li>
        <?php } ?>
        <div class="link">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                <?= $languages['Language'] ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="?lang=en"><?= $languages['English'] ?></a></li>
                <li><a class="dropdown-item" href="?lang=ar"><?= $languages['Arabic'] ?></a></li>
            </ul>
        </div>
    </ul>
</nav>

    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>