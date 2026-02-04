<footer class="container-fluid py-5 bg-end">
  <div class="container">
    <div class="row justify-content-md-between justify-content-center">
      <div class="col-xl-3 col-lg-4 col-md-12 my-lg-0 my-3  d-flex flex-column align-items-center">
        <a href="https://elitebookwriters.com/amazon-book-services/">
          <img class="lazyload" data-src="./assets/images/footer-logo.svg" width="270" height="62" height="" alt="logo">
        </a>
        <div class="mt-4 d-flex  flex-lg-row flex-column align-items-md-start justify-content-md-start ">
          <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="style-btn-1 rounded-5 px-3 py-3 my-2">
            <span>Get A Quote</span>
            <span class="style-i rounded-5 px-lg-4 px-md-2 px-3 py-1 ">
              <i class="fa-solid fa-arrow-right-long color-1"></i>
            </span>
          </a>


        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <h3 class="text-white text-md-start text-center">About Us</h3>
        <p class=" pt-2 color-light-f text-md-start text-center">
          Elite book writers is a leading US-based company designed to cater to your book’s publishing needs.
        </p>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <h3 class="text-white text-md-start text-center">Contact Us</h3>
        <p class="text-md-start text-center pt-2">
          <a href="tel:+1 213 301 0131" class="color-light-f"><i class="fa-solid fa-phone-volume pe-2 "></i>+1 213 301 0131</a>
          <br>
          <a href="mailto:info@elitebookwriters.com" class="color-light-f"><i class="fa-solid fa-envelope pe-2"></i>info@elitebookwriters.com</a>
        </p>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6 d-flex flex-column align-items-md-start align-items-center">
        <h3 class="text-white text-md-start text-center">Social Media</h3>
        <p class="color-light-f pt-2 text-md-start text-center">
          <a href="https://www.facebook.com/elitebookwriterss" target="_blank" class="text-center color-light-f"><i class="fa-brands fa-square-facebook me-2 fs-4"></i></a>
          <a href="javascrip:;" class="text-center color-light-f"><i class="fa-brands fa-instagram me-2 fs-4"></i></a>
          <a href="javascrip:;" class="text-center color-light-f" target="_blank"><i class="fa-brands fa-square-x-twitter fs-4"></i></a>
        </p>
        <img data-src="./assets/images/payment.webp" class="lazyload " width="275" height="80" alt="payment method">
      </div>

    </div>
  </div>

</footer>
<div class="py-4 bg-black">
  <p class="text-center p-0 text-white m-0">
    © 2024 Elite book writers. All right reserved.
  </p>
</div>






<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0 pop-bg">

      <div class="modal-body" style="top: 80px;">
        <div class="row p-3 position-relative">
          <div class="btn-pop-closs">
            <button type="button" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="col-lg-12 " style="border-bottom: 5px solid #E47200; border-radius:20px">
            <div class="row shadow bg-white" style="border-radius:20px;">

              <div class="col-md-12">
                <div class="top-form px-0 " style="box-shadow:none !important;">

                  <div class="pop-heading">
                    <h2 class="h1-heading">ACTIVATE YOUR COUPON TO AVAIL 50% DISCOUNT</h2>
                  </div>
                  <form action="code_form.php" method="post" class="row  pop-design px-3 py-3">
                    <div class="col-12 my-2">
                      <input type="Name" name="p_name" placeholder="Your Name" required>
                    </div>
                    <div class="col-12 my-2">
                      <input type="number" name="p_number" placeholder="Phone Number" required>
                    </div>
                    <div class="col-12 my-2">
                      <input type="email" name="p_email" placeholder="Email Address" required>
                    </div>
                    <div class="col-12 my-2">
                      <textarea name="p_message" placeholder="Message"></textarea>
                    </div>

                    <div class="col-12 my-2">
                      <button class="btn-style-1 w-0 py-3 px-3 rounded-5 w-100" name="popup_form">Publish My Book</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- popoup -->
<style>
  .pop-heading{
    border-left: 5px solid #e10000;
    padding: 10px 20px;
    /* border-radius: 20px; */
    margin-top:10px;
  }
  .pop-bg {
    background: transparent;
   
  }

  .pop-design {
    
    input {
      width: 100%;
      padding: 13px;
      background: #aeaeae5e;
      /* box-shadow: 0 0 5px 1px #eee; */
      border: none;
      border-radius: 10px !important;
    }

    input:focus {
      outline-color: #f6921e;
    }

    textarea {
      width: 100%;
      padding: 13px;
      background: #aeaeae5e;
      border-radius: 10px !important;
      border: none;
      height: 150px;
    }

    textarea:focus {
      outline-color: #f6921e;
    }
  }

  .btn-pop-closs {
    button {
      outline: 0px;
      background-color: #e10000;
      color: white;
      right: -95%;
      position: relative;
      top: 17px;
      width: 30px;
      height: 30px;
      border: 1px solid #fff;
      border-radius: 20px;
    }
  }

  .modal {
    --bs-modal-width: 700px !important;
    
  }
</style>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      $('#staticBackdrop').modal('');
    }, 15000);
  });
</script>













<script type="text/javascript">
  $(document).ready(function() {
    $('.books-slide').slick({

      infinite: true,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 2500,
      prevArrow: false,
      nextArrow: false,
      slidesToShow: 5,
      slidesToScroll: 5,
      responsive: [

        {
          breakpoint: 1900,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 5,
          }
        },
        {
          breakpoint: 1700,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 1114,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 762,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });

  });
  // -----Review-slide----------

  $('.test-slide').slick({

    infinite: true,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [

      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },

    ]
  });

  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }


  document.getElementById("defaultOpen").click();
  $('.Review-slide').slick({

    infinite: true,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [

      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },

    ]
  });
</script>


<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65f9d2daa0c6737bd12290a5/1hpbtva5e';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>

</html>