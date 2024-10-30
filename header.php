<?php require_once 'languages/lang.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>France Spa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<div class="whatsapp"><a href="https://wa.me/+966508284430" class="float bounce"><i class="fa-brands fa-whatsapp my-float"></i></a></div>
<!--Start header-->

<header class="header">
    <div class="container btm-cnt">
        <!--
            top header
                        -->
        <div class="top-header d-flex al-center js-between">
            <div class="top-header-left d-flex al-center gap-30">
                <div class="call d-flex al-center gap-10">
                    <i class="fa-solid fa-phone icon"></i>
                    <div class="name">Call Us:</div>
                    <a href="tel:+966531832286" class="num-date">(+966)531832286</a>
                </div>
                <div class="time d-flex al-center gap-10">
                    <i class="fa-regular fa-clock icon"></i>
                    <div class="name">Opening Hour:</div>
                    <div class="num-date"><span>Saturday - Friday,</span> 10:30 AM - 12 AM </div>
                </div>
            </div>
            <div class="top-header-right d-flex al-center gap-20">
                <a href="https://www.instagram.com/francespa.sa?igsh=cWg1d3ZlNGlmdWJv" target="_blank"><i class="fa-brands fa-instagram icon-media"></i></a>
                <a href="https://www.tiktok.com/@france.spa?_t=8qfdQ4WAMAU&_r=1" target="_blank"><i class="fa-brands fa-tiktok icon-media"></i></a>
            </div>
        </div>
        <!--
            buttom header
            -->
        <div class="btm-header d-flex js-between al-center">
            <div class="logo"><a href="index.php"><img src="/images/name-logo.png" alt=""></a></div>
            <div class="ul d-flex al-center gap-20">
                <li><a href="index.php"><?= _first('Home') ?></a></li>
                <li><a href="about.php"><?= _first('About Us') ?></a></li>
                <li><a href="services.php"><?= _first('Services') ?></a></li>
                <li><a href="portfolio.php"><?= _first('Portfolio') ?></a></li>
                <li><a href="contact.php"><?= _first('Contact Us') ?></a></li>
            </div>
            <div class="btn-lang d-flex al-center gap-20">
                <ul class="languages d-flex al-center gap-10">
                    <li><a href="<?= $current_page ?>?lang=en">En</a></li>
                    <li><a href="<?= $current_page ?>?lang=ar">Ar</a></li>
                </ul>
                <div class="contact-btn"><a href="contact.php">CONTACT US <i class="fa-solid fa-arrow-right"></i></a></div>
                <div class="bars-menu">
                    <i class="fa-solid fa-bars open-menu"></i>
                    <i class="fa-solid fa-xmark close-menu"></i>
                </div>
            </div>
        </div>
    </div>
</header>