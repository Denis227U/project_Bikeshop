// 2var preloader
// $(window).on('load', function(){
//     $('#page-preloader').delay(1000).fadeOut('slow');
// })


$(document).ready(function() {
    $('.components-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    prevArrow: '<button class="prev"></button>',
                    nextArrow: '<button class="next"></button>',
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    prevArrow: '<button class="prev"></button>',
                    nextArrow: '<button class="next"></button>',
                    slidesToScroll: 1
                }
            }
        ]
    });
});


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
        alwaysShowClose: false
    });
});


$(document).ready(function() {
    $("#home_menu").on("click", "a", function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);
    });
});
