// slider banner 
$('.slider-banner').slick({
    infinite: true,
    slidesToScroll: 1,
    speed: 1000,
    autoplay : true,
    dots : false,
    arrows : false 
});
// tabs home page pricing section
$("#tabs" ).tabs({
    show:300,
    hide: 300
    });

// slider reviews section
$('.all-card').slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    autoplay: true,
    variableWidth: true,
    infinite: true,
    autoplaySpeed: 2000,
    arrows : false,
    });