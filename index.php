<?php include_once('header.php'); ?>
<?php require_once 'languages/lang.php'; ?>
<!--Start banner-->
<div class="banner-section slider-banner">
    <div class="banner">
        <div class="container">
            <div class="content d-flex js-between al-center">
                <div class="text">
                    <h2 class="h1"><?= _first('Barbers & Spa Services') ?></h2>
                    <p><?= _first('Professional grooming services, including precision haircuts, styling, and relaxing spa treatments to help you look and feel your best.') ?></p>
                    <div class="btn"><?= _first('Our Services') ?><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left' : 'fa-solid fa-arrow-right'; ?>"></i></div>
                </div>
                <a href="/images/banner-video.mp4" class="circle">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="content d-flex js-between al-center">
                <div class="text">
                    <h2 class="h1"><?= _first('Barbers & Spa Services') ?></h2>
                    <p><?= _first('Experience top-notch grooming with expert barbers, stylish cuts, and rejuvenating spa services for a fresh and polished look.') ?></p>
                    <div class="btn"><?= _first('Our Services') ?><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left' : 'fa-solid fa-arrow-right'; ?>"></i></div>
                </div>
                <a href="/images/banner-video.mp4" class="circle">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--End banner-->
<!--Start what we do-->
<div class="what-do">
    <div class="container">
        <div class="content d-flex al-center gap-30">
            <div class="img"></div>
            <div class="text-content">
                <h1 class="title"><?= _first('WHAT WE DO?') ?></h1>
                <p class="p"><?= _first('We provide expert hair cutting and rejuvenating spa services that enhance your style and promote relaxation for a complete grooming experience') ?></p>
                <div class="items d-flex js-between al-center">
                    <div class="item d-flex js-between al-center gap-20">
                        <img src="/images/wwd-cut.png" alt="" class="icon">
                        <div class="text">
                            <h2 class="title"><?= _first('Hair Cutting') ?></h2>
                            <p class="description"><?= _first('A professional haircut tailored to your style for an elegant and refreshing look.') ?></p>
                        </div>
                    </div>
                    <div class="item d-flex js-between al-center gap-20">
                        <img src="/images/wwd-spa.png" alt="" class="icon">
                        <div class="text">
                            <h2 class="title"><?= _first('Spa & GYM') ?></h2>
                            <p class="description"><?= _first('Professional spa services designed to enhance your wellness and relaxation.') ?></p>
                        </div>
                    </div>
                    <div class="item d-flex js-between al-center gap-20">
                        <img src="/images/wwd-style.png" alt="" class="icon">
                        <div class="text">
                            <h2 class="title"><?= _first('Shaving Style') ?></h2>
                            <p class="description"><?= _first('Expert shaving services crafted for a clean, refined appearance.') ?></p>
                        </div>
                    </div>
                    <div class="item d-flex js-between al-center gap-20">
                        <img src="/images/wwd-body.png" alt="" class="icon">
                        <div class="text">
                            <h2 class="title"><?= _first('Body Treatments') ?></h2>
                            <p class="description"><?= _first('Luxurious body treatments designed to enhance your skin\'s appearance and radiance.') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End what we do-->
<!--Start About text-->
<div class="about-section">
    <div class="top-content d-flex gap-40">
        <img src="/images/bout-section-left.jpg" alt="" class="img-left">
        <div class="text-center d-flex al-center js-center gap-40">
            <h2 class="title"><?= _first('WE’RE BEST BARBERS & HAIR CUTTING SALON') ?></h2>
            <p class="paragraph"><?= _first('At our barbershop and hair cutting salon, we pride ourselves on delivering exceptional grooming services tailored to each client\'s unique style. Our skilled barbers are dedicated to providing precision cuts, classic styles, and modern trends in a welcoming environment. We prioritize customer satisfaction and use high-quality products to ensure a perfect finish every time. Whether you’re looking for a sharp haircut, a refreshing shave, or a complete style overhaul, we have you covered. Experience the difference with our personalized services and attention to detail that sets us apart as the best in the business.') ?></p>
        </div>
        <img src="/images/bout-section-right.jpeg" alt="" class="img-right">
    </div>
    <div class="get-service">
        <div class="container">
            <div class="content-bottom d-flex al-center js-between">
                <h3 class="text"><?= _first('READY TO GET OUR SERVICE?') ?></h3>
                <a href="contact.php" class="button"><?= _first('CONTACT US') ?></a>
            </div>
        </div>
    </div>
</div>

<!--end About text-->
<!--start services section-->
<div class="services">
    <div class="container">
        <div class="content">
            <div class="title-section">
                <h1 class="title"><?= _first('SERVICE WE PROVIDE') ?></h1>
                <p class="description"><?= _first('Our services include precision haircuts, revitalizing spa treatments, and tailored grooming solutions to help you look and feel your best') ?></p>
            </div>
            <div class="items d-flex js-between al-center gap-30">
                <div class="item">
                    <img src="/images/wwd-cut.png" alt="" class="icon">
                    <h3 class="title-item"><?= _first('Hair Cutting Style') ?></h3>
                    <p class="desciption-item"><?= _first('A professional haircut tailored to your style for an elegant and refreshing look.') ?></p>
                    <a href="#"><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
                </div>
                <div class="item">
                    <img src="/images/hair-washing.png" alt="" class="icon">
                    <h3 class="title-item"><?= _first('Hair Washing') ?></h3>
                    <p class="desciption-item"><?= _first('Enjoy a hair wash that cleanses and refreshes your hair. A relaxing experience that leaves your hair soft and radiant.') ?></p>
                    <a href="#"><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
                </div>
                <div class="item">
                    <img src="/images/wwd-spa.png" alt="" class="icon">
                    <h3 class="title-item"><?= _first('Body Treatments') ?></h3>
                    <p class="desciption-item"><?= _first('Luxurious body treatments designed to enhance your skin\'s appearance and radiance.') ?></p>
                    <a href="#"><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
                </div>
                <div class="item">
                    <img src="/images/beauty.png" alt="" class="icon">
                    <h3 class="title-item"><?= _first('Beauty & Spa') ?></h3>
                    <p class="desciption-item"><?= _first('Professional spa services designed to enhance your wellness and relaxation.') ?></p>
                    <a href="#"><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
                </div>
                <div class="item">
                    <img src="/images/wwd-style.png" alt="" class="icon">
                    <h3 class="title-item"><?= _first('Stylist Shaving') ?></h3>
                    <p class="desciption-item"><?= _first('Experience expert shaving services designed for a clean and polished look. Our skilled barbers ensure precision and style for every client.') ?></p>
                    <a href="#"><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
                </div>
                <div class="item">
                    <img src="/images/hair-color.png" alt="" class="icon">
                    <h3 class="title-item"><?= _first('Multi Hair Colors') ?></h3>
                    <p class="desciption-item"><?= _first('Achieve a new look with our multi hair color services, featuring vibrant shades and professional results that reflect your style.') ?></p>
                    <a href="#"><i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--start services section-->
<!--start Pricing section-->
<div class="pricing">
    <div class="container">
        <div class="content">
            <div class="title">
            <h3 class="h3"><?= _first('AWESOME PRICING PLAN') ?></h3>
            <p class="description"><?= _first('Our pricing plans offer exceptional value while upholding quality. Choose from a variety of competitively priced services for a tailored grooming experience.') ?></p>
            </div>
            <div class="tabs" id="tabs">
                <ul class="tabs-list d-flex js-between al-center">
                    <li class="tab">
                        <a href="#tab-1">
                            <img src="/images/wwd-cut.png" alt="" class="icon">
                            <div class="title"><?= _first('hair solutions') ?></div>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#tab-2">
                            <img src="/images/beauty.png" alt="" class="icon"> 
                            <div class="title"><?= _first('beauty & dye') ?></div>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#tab-3">
                            <img src="/images/wwd-body.png" alt="" class="icon">
                            <div class="title"><?= _first('body treatments') ?></div>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#tab-4">
                            <img src="/images/hair-washing.png" alt="" class="icon">
                            <div class="title"><?= _first('cleaning & washing') ?></div>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#tab-5">
                            <img src="/images/steam.png" alt="" class="icon">
                            <div class="title"><?= _first('royal bath') ?></div>
                        </a>
                    </li>

                </ul>
                <ul id="tab-1" class="tabs-content d-flex al-center js-between gap-10">
                    <li  class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-1.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Hair Cutting') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$50</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-5.jpg" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Short hair blowdry') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$30</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-4.jpg" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Long hair blowdry') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$50</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-2.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('beard shave') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$30</h3>
                    </li>
                </ul>
                <ul id="tab-2" class="tabs-content d-flex al-center js-between gap-10">
                    <li  class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                        <img src="images/pricing-3.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('hair dye') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$120</h3>
                    </li>
                    <li  class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                        <img src="images/pricing-3.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Keratin short hair straightener') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$250</h3>
                    </li>
                    <li  class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                        <img src="images/pricing-3.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Keratin long hair straightener') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$450</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-6.jpg" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('full beard dye') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$60</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-6.jpg" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('goatee dye') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$30</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-6.jpg" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('multi-colored') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$150</h3>
                    </li>
                </ul>
                <ul id="tab-3" class="tabs-content d-flex al-center js-between gap-10">
                    <li  class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-9.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('relaxation massage') ?></h6>
                                <div class="desc"><?= _first('Clean & simple 30-60 minutes') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$130</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-9.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('hot stone massage') ?></h6>
                                <div class="desc"><?= _first('Clean & simple 30-60 minutes') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$150</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-9.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('hot oil massage') ?></h6>
                                <div class="desc"><?= _first('Clean & simple 30-60 minutes') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$150</h3>
                    </li>
                </ul>
                <ul id="tab-4" class="tabs-content d-flex al-center js-between gap-10">
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-1.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Hair washing') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$20</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-7.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('facial skin exfoliation') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$60</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-8.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Cleaning facial skin') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$150</h3>
                    </li>
                </ul>
                <ul id="tab-5" class="tabs-content d-flex al-center js-between gap-10">
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-10.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('royal steam bath') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$450</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-10.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('Andalusian steam bath') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$150</h3>
                    </li>
                    <li class="tab-price d-flex js-between al-center">
                        <div class="left d-flex al-center gap-20">
                            <img src="images/pricing-10.webp" alt="" class="img">
                            <div class="text">
                                <h6 class="price-txt"><?= _first('herbal steam bath') ?></h6>
                                <div class="desc"><?= _first('Clean & simple') ?></div>
                            </div>
                        </div>
                        <h3 class="price">$250</h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end Pricing section-->
<!--start gallery section-->
<div class="gallery">
    <div class="container">
        <div class="content">
            <div class="title"><?= _first('LATEST PORTFOLIO GALLERY') ?></div>
            <div class="text d-flex js-between">
                <p class="paragraph"><?= _first('Discover our newest works that exemplify our creativity and craftsmanship.') ?></p>
                <a href="portfolio.php" class="btn"><?= _first('EXPLORE MORE') ?> <i class="<?php echo $_SESSION["lang"] === 'ar' ? 'fa-solid fa-arrow-left-long arrow' : 'fa-solid fa-arrow-right-long arrow'; ?>"></i></a>
            </div>
            <div class="images d-flex js-between gap-5">
                <img src="/images/portfolio/portfolio-4.jpg" alt="" class="img">
                <img src="/images/portfolio/portfolio-1.jpg" alt="" class="img">
                <img src="/images/portfolio/portfolio-2.jpg" alt="" class="img">
                <img src="/images/portfolio/portfolio-3.jpg" alt="" class="img">
                <img src="/images/portfolio/portfolio-14.jpg" alt="" class="img">
                <img src="/images/portfolio/portfolio-6.jpg" alt="" class="img">
                <img src="/images/portfolio/portfolio-23.jpg" alt="" class="img">
            </div>
        </div>
    </div>
</div>
<!--end gallery section-->
<!--start reviews section-->
<div class="reviews">
        <h2 class="title"><?= _first('WHAT OUR CLIENTS SAY?') ?></h2>
        <p class="paragraph"><?= _first('Here’s a glimpse of the experiences and feedback from our valued clients. Their testimonials reflect our commitment to quality, service, and satisfaction, showcasing how we’ve made a positive impact through our work.') ?></p>
        <div class="content">
            <div class="all-card">
                <div class="card-item">
                    <div class="card">
                        <div class="card-content">
                            <div class="img">
                                <img class="logo" src="images/mask-group.jfif" alt="">
                                <img class="star" src="images/Stars.svg" alt="">
                            </div>
                            <div class="text">
                                <div class="big-p"><?= _first('Had a haircut here, very clean place. Fast and good service. Marrocan barber.') ?></div>
                                <div class="small-p"><?= _first('Dieter De Buck') ?></div>
                            </div>
                        </div>
                    </div>
                </div><!--card-item-->
                <div class="card-item">
                    <div class="card">
                        <div class="card-content">
                            <div class="img">
                                <img class="logo" src="images/mask-group.jfif" alt="">
                                <img class="star" src="images/Stars.svg" alt="">
                            </div>
                            <div class="text">
                                <div class="big-p"><?= _first('A wonderful five-star Moroccan bath, honest and clean, and the specialist has great experience.') ?></div>
                                <div class="small-p">
                                    <span class="span"><?= _first('Hussein Hussein') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--card-item-->
                <div class="card-item">
                    <div class="card">
                        <div class="card-content">
                            <div class="img">
                                <img class="logo" src="images/mask-group.jfif" alt="">
                                <img class="star" src="images/Stars.svg" alt="">
                            </div>
                            <div class="text">
                                <div class="big-p"><?= _first('Mr. Hossam Maghribi, I took a Moroccan bath with him. I recommend everyone to visit them, especially Hossam, if God wills.') ?></div>
                                <div class="small-p">
                                    <span class="span"><?= _first('Abd elQadir Al-Sheikh') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--card-item-->
                <div class="card-item">
                    <div class="card">
                        <div class="card-content">
                            <div class="img">
                                <img class="logo" src="images/mask-group.jfif" alt="">
                                <img class="star" src="images/Stars.svg" alt="">
                            </div>
                            <div class="text">
                                <div class="big-p"><?= _first('Mashallah, may God bless you. The best Moroccan bath I have ever had. Congratulations to you. May God make you happy.') ?></div>
                                <div class="small-p">
                                    <span class="span"><?= _first('Haithem CHEFRIDI') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--card-item-->
            </div>
        </div>
</div>
<!--end reviews section-->
<!--start sponsors section-->
<div class="sponsors">
    <div class="container">
        <div class="content">
        <div class="title"><?= _first('PREMIUM SPONSORS') ?></div>
        <div class="description"><?= _first('Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse') ?></div>
            <div class="logos d-flex al-center js-between">
                <img src="images/brand-1.webp" alt="" class="img">
                <img src="images/brand-2.jpg" alt="" class="img">
                <img src="images/brand-3.jfif" alt="" class="img">
                <img src="images/brand-4.jfif" alt="" class="img">
                <img src="images/brand-5.jfif" alt="" class="img">
                <img src="images/brand-6.jfif" alt="" class="img">
            </div>
        </div>
    </div>
</div>
<!--end sponsors section-->
<?php include_once('footer.php'); ?>
