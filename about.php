<?php include_once('header.php'); ?>
<div class="page-about">
<!--Start banner-->
    <div class="banner-section slider-banner">
        <div class="banner">
            <div class="container">
                <div class="content d-flex js-between al-center">
                    <h1 class="title"><?= _first('About') ?></h1>
                    <h3 class="second-title">
                        <a class="first" href="index.php"><?= _first('cutting') ?></a> 
                        <span>.</span> 
                        <a class="seconde" href="#"><?= _first('about') ?></a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
<!--End banner-->
<!--start about-->
    <div class="about">
        <div class="container">
            <div class="content d-flex js-between al-center gap-50">
                <div class="image">
                    <img src="images/home2-about-left.webp" alt="">
                </div>
                <div class="text">
                    <img src="images/brand-1.webp" alt="" class="logo">
                    <h1 class="title"><?= _first('BEST BARBERS & HAIR CUTTING SOLUTIONS.') ?></h1>
                    <p class="description"><?= _first('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremqu laudantium totam rem aperiam eaque ipsa quae ab illo inventor eritatis architecto of beatae vitae dicta sunt explicabo. Nemo enim ipsam quia voluptas sit.') ?></p>
                    <p class="description"><?= _first('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante doloremqu laudantium totam rem aperiam eaque ipsa quae ab illo inventor eritatis architecto of beatae vitae dicta sunt explicabo. Nemo enim ipsam quia voluptas sit.') ?></p>
                    <div class="about-btn">
                        <a href="about.php"><?= _first('CONTACT US') ?><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left' : 'fa-solid fa-arrow-right'; ?>"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--end about-->
<!--working hours-->
    <div class="working-hours">
        <div class="container">
            <div class="content d-flex js-between al-center gap-50">
                <div class="hours">
                    <div class="overlay"></div>
                    <div class="text">
                        <div class="title"><?= _first('WORKING HOURS') ?></div>
                        <p class="p"><?= _first('Sit amet consectetur adipiscing elit eiusmod tempor incididunt labore dolorema') ?></p>
                        <ul class="times">
                            <li><?= _first('SATURDAY') ?> <span><?= _first('10AM - 7PM') ?></span></li>
                            <li><?= _first('SUNDAY') ?> <span><?= _first('10AM - 7PM') ?></span></li>
                            <li><?= _first('MONDAY') ?> <span><?= _first('10AM - 7PM') ?></span></li>
                            <li><?= _first('TUESDAY') ?> <span><?= _first('10AM - 7PM') ?></span></li>
                            <li><?= _first('WEDNESDAY') ?> <span><?= _first('10AM - 7PM') ?></span></li>
                            <li><?= _first('THURSDAY') ?> <span><?= _first('10AM - 7PM') ?></span></li>
                            <li><?= _first('FRIDAY') ?> <span><?= _first('closed') ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="video d-flex js-center al-center">
                    <a href="#" class="circle">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--working hours-->
</div>
<!--start footer section-->
<?php include_once('footer.php'); ?>
