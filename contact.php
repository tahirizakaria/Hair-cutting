<?php include_once('header.php'); ?>
<div class="page-about">
<!--Start banner-->
    <div class="banner-section slider-banner">
        <div class="banner">
            <div class="container">
                <div class="content d-flex js-between al-center">
                    <h1 class="title">Contact</h1>
                    <h3 class="second-title"><a class="first" href="index.php">cutting</a> <span>.</span> <a class="seconde" href="#">contact</a></h3>
                </div>
            </div>
        </div>
    </div>
<!--End banner-->
<!--start contact page-->
<div class="contact-page">
    <div class="container">
        <div class="content">
            <div class="text">
                <div class="title">GET IN TOUCH</div>
                <p class="p">Contact us here for any questions or support. You can find our information below, including our address and a map for directions. We look forward to hearing from you!</p>    
            </div>
            <div class="contact-details">
                <div class="cards d-flex js-between al-center">
                    <div class="box phone d-flex al-center gap-30">
                        <div class="logo"><i class="fa-solid fa-phone"></i></div>
                        <div class="info">
                            <h4 class="name">Phone:</h4>
                            <a class="des" href="tel:+966508284430" class="p">(+966)508284430</a>
                        </div>
                    </div>
                    <div class="box phone d-flex al-center gap-30">
                        <div class="logo"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="info">
                            <h4 class="name">Address:</h4>
                            <a class="des" href="https://maps.app.goo.gl/8diFDZKJuD4qcU6s6" target="_blank">King Abdullah Rd, Al-Baghdadiyah Al-Gharbiyah</a>
                        </div>
                    </div>
                    <div class="box phone d-flex al-center gap-30">
                        <div class="logo"><i class="fa-regular fa-envelope"></i></div>
                        <div class="info">
                            <h4 class="name">Email:</h4>
                            <a href="#" class="des">contact.francespa.net</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="maps-form d-flex js-between gap-50">
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1421.3061745970651!2d39.17435864548292!3d21.509238082859465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cf7751b2b72d%3A0x2f3f172c98872d9c!2z2LXYp9mE2YjZhiDZgdix2KfZhtizINiz2KjYpw!5e0!3m2!1sfr!2ssa!4v1715004166272!5m2!1sfr!2ssa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <input type="text" class="name" placeholder="Name" required>
                <input type="tel" class="phone" placeholder="Phone Number" required>
                <select name="Hair Cut" required>
                    <option value="hair-cut">Hair Cut</option>
                    <option value="massage">Beauty & Spa</option>
                </select>
                <input type="email" id="email" placeholder="Email" required>
                <textarea class="msg" placeholder="Message" required></textarea>
                <div class="contact-btn"><a href="#">Send <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</div>
<!--end contact page-->
<!--start footer section-->
<?php include_once('footer.php'); ?>