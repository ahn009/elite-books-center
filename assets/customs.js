// --------------------------------------------------------------------------

// Modal Script
const delay_modal = 10000;
setTimeout("document.getElementById('overlayModal').style.display='block'", delay_modal)

// --------------------------------------------------------------------------

const navbar = document.querySelector('.nav-fixed');
const navbarup = document.querySelector('.header-up');
const navbardown = document.querySelector('.header-down');
window.onscroll = () => {
    if (window.scrollY > 70) {
        navbar.classList.add('nav-active');
        navbarup.classList.add('nav-active-header-up');
        navbardown.classList.add('nav-active-header-down');
    } else {
        navbar.classList.remove('nav-active');
        navbarup.classList.remove('nav-active-header-up');
        navbardown.classList.remove('nav-active-header-down');
    }
};

// --------------------------------------------------------------------------

$('ul.navigation-list li.dropdown').hover(function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown(500);
}, function () {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// --------------------------------------------------------------------------

const sideNav = () => {
    if (mobileSideNav.style.right === '-70%') {
        mobileSideNav.style.right = '0';
        $('.side-nav-overlay').fadeIn(500)
        $('.side-nav-overlay').removeClass(".overlayb")
    } else {
        mobileSideNav.style.right = '-70%';
        $('.side-nav-overlay').fadeOut(500)
        $('.side-nav-overlay').addClass(".overlayb")
    }
}

let openSideNav = document.getElementById('open-side-menu')
let mobileSideNav = document.getElementById('side-nav')

openSideNav.addEventListener('click', sideNav)

$('.side-nav-overlay').click(() => {
    sideNav()
})

// --------------------------------------------------------------------------

$(document).ready(function () {

    $('.book-sec-slide').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        prevArrow: $(".left-arrowed"),
        nextArrow: $(".right-arrowed"),
        speed: 500,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    $('.big-book-sec-slide').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        prevArrow: $(".left-arrowed2"),
        nextArrow: $(".right-arrowed2"),
        speed: 500,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    $('.children-book-sec-slide').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        prevArrow: $(".left-arrowed3"),
        nextArrow: $(".right-arrowed3"),
        speed: 500,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    // $('.banner-slide').slick({
    //     dots: false,
    //     autoplay: true,
    //     infinite: true,
    //     prevArrow: false,
    //     nextArrow: false,
    //     speed: 1000,
    //     autoplaySpeed: 4000,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    // });

    $('.testimonial-slide').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        prevArrow: false,
        nextArrow: false,
        speed: 1000,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
});

// --------------------------------------------------------------------------
















(function () {
  const KEY = "ebw_cookie_consent"; // unique key for EliteBookWriters
  const popup = document.getElementById("cookieConsent");
  const btnAccept = document.getElementById("cookieAccept");
  const btnReject = document.getElementById("cookieReject");

  if (!popup || !btnAccept || !btnReject) return;

  function showPopup() {
    popup.classList.add("show");
  }

  function hidePopup() {
    popup.classList.remove("show");
  }

  // Show only if not decided yet
  const existing = localStorage.getItem(KEY);
  if (!existing) {
    // slight delay so it feels smoother
    window.setTimeout(showPopup, 700);
  }

  btnAccept.addEventListener("click", function () {
    localStorage.setItem(KEY, "accepted");
    hidePopup();
  });

  btnReject.addEventListener("click", function () {
    localStorage.setItem(KEY, "rejected");
    hidePopup();
  });
})();
