$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
    });


    $(window).scroll(function() {
        if ($(this).scrollTop() > 40) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }
    });

    $("#topBtn").click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
    });






    // slick
    $('.slider-post').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });



    //slick detail
    $('.post-wrapper-detail').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev')
    });



    // lightSlider

    $(document).ready(function() {
        $('#vertical').lightSlider({
            auto: true,
            loop: true,
            pauseOnHover: true,
            gallery: true,
            item: 1,
            vertical: true,
            verticalHeight: 295,
            vThumbWidth: 50,
            thumbItem: 8,
            thumbMargin: 4,
            slideMargin: 0
        });
    });
});

$(function() {
    $('a#confirmLogout').click(function() {
        if (confirm('Bạn có muốn đăng xuất?')) {
            return true;
        }
        return false;
    });
});


function submitForm() {
    return confirm('Đăng ký tài khoản?');
}