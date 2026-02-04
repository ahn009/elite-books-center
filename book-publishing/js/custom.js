// logo start
$(".logo-box_wrppr").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: true,
    // speed: 300,
    slidesToShow: 12,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3000,
    // arrows: false,
    // dots: false,
    pauseOnHover: true,
    cssEase: 'linear',


    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 7,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
        },
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        },
    },
    ],
});

// logo end

// logo start
$(".client-logo-slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 4000,
    // arrows: false,
    // dots: false,
    pauseOnHover: true,
    cssEase: 'linear',
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 575,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    ],
});

// logo end

// genre-slider start
$(".genre-slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: true,
    autoplay: false,
    autoplaySpeed: 0,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 575,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        },
    },
    ],
});

// genre-slider end

// package_slider start

$(".package_slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: false,
    autoplay: false,
    autoplaySpeed: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 575,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        },
    },
    ],
});

// package_slider end

// client-slider start

$(".client-slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: false,
    autoplay: false,
    autoplaySpeed: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 575,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        },
    },
    ],
});

// client-slider end

// wow animation js

// $(function () {
//     new WOW().init();
// });


// responsive menu js

// $(function () {
//     $('#menu').slicknav();
// });

// slick slider in tabs js end


$('.read_more_btnn').click(function (e) {
    e.preventDefault();
    $('.paragraph_boxx').toggleClass('h-auto')
    if ($('.paragraph_boxx').hasClass('h-auto')) {
        $(this).html('Read Less')
    } else {
        $(this).html('Read More')
    }
});



$('.readmore_btnn').click(function (e) {
    e.preventDefault();
    $('.paragraph_box_two').toggleClass('h-auto')
    if ($('.paragraph_box_two').hasClass('h-auto')) {
        $(this).html('Read Less');
        $(this).addClass('move_left');
    } else {
        $(this).html('Read More');
        $(this).removeClass('move_left');
    }
});


$(document).ready(function() {
    // Delay of 5 seconds (5000 milliseconds)
    setTimeout(function() {
        $('#exampleModal').modal('show');
    }, 5000);
});



// FORM INTEGRATION START
// MAIN FORM START
$('#main-form').submit(function (e) {
    e.preventDefault();

    var name = $('#main-form input[name="name"]').val();
    var email = $('#main-form input[name="email"]').val();
    var number = $('#main-form input[name="phone"]').val();
    var message = $('#main-form textarea[name="message"]').val();


    $('#main-form button').prop('disabled', true);

    $.ajax({
        url: "./ajax_email.php",
        type: "post",
        data: { name: name, number: number, email: email, message: message },
        success: function (result) {
            console.log(result);
            if (result) {
                $('#main-form').append('<span class="success-message">Form SuccessFully Submited</span>')
                $('#main-form button').hide();
                $('#main-form').get(0).reset();
                window.location.href='https://mexabookpublishers.com/thankyou';
            } else {
                $('#main-form button').prop('disabled', false);
            }

        }
    });
})
// MAIN FORM END

// POPUP START
$('#popup-form').submit(function (e) {
    e.preventDefault();

    var name = $('#popup-form input[name="name"]').val();
    var email = $('#popup-form input[name="email"]').val();
    var number = $('input[name="phonenumber"]').val();
    var message = $('#popup-form textarea[name="message"]').val();


    $('#popup-form button').prop('disabled', true);

    $.ajax({
        url: "./ajax_email.php",
        type: "post",
        data: { name: name, number: number, email: email, message: message },
        success: function (result) {
            console.log(result);
            if (result) {
                $('#popup-form').append('<span class="success-message">Form SuccessFully Submited</span>')
                $('#popup-form button').hide();
                $('#popup-form').get(0).reset();
                window.location.href='https://mexabookpublishers.com/thankyou';
            } else {
                $('#popup-form button').prop('disabled', false);
            }

        }
    });
})
// POPUP END

// GET IN TOUCH START
$('#getintouch-form').submit(function (e) {
    e.preventDefault();

    var name = $('#getintouch-form input[name="name"]').val();
    var email = $('#getintouch-form input[name="email"]').val();
    var number = $('#getintouch-form input[name="phone"]').val();
    var message = $('#getintouch-form textarea[name="message"]').val();


    $('#getintouch-form button').prop('disabled', true);

    $.ajax({
        url: "./ajax_email.php",
        type: "post",
        data: { name: name, number: number, email: email, message: message },
        success: function (result) {
            console.log(result);
            if (result) {
                $('#getintouch-form').append('<span class="success-message">Form SuccessFully Submited</span>')
                $('#getintouch-form button').hide();
                $('#getintouch-form').get(0).reset();
                window.location.href='https://mexabookpublishers.com/thankyou';
            } else {
                $('#getintouch-form button').prop('disabled', false);
            }

        }
    });
})
// GET IN TOUCH END

// FORM INTEGRATION END 