<footer>

    <section class="container-fluid footer-bg py-5 f-links">
        <div class="container ">
            <div class="row justify-content-center align-items-start">

                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 p-2 text-capitalize footer-links d-flex justify-content-center align-items-start ">
                    <img width="80%" src="./assets/images/footer-logo.svg" alt="">
                </div>

                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="row justify-content-center align-items-start">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 py-2 px-0 text-capitalize footer-links">

                            <h5>Services</h5>
                            <ul class="list-unstyled">
                                <li><a href="https://elitebookwriters.com/">Book Writing</a></li>
                                <li><a href="ghost-writing.php">Ghost Writing</a></li>
                                <li><a href="book-marketing.php">Book Marketing</a></li>
                                <li><a href="book-publishing.php">Book Publishing</a></li>
                                <li><a href="book-cover-design.php">Book Cover Design</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 py-2 px-0 text-capitalize footer-links">
                            <h5>useful links</h5>
                            <ul class="list-unstyled">
                                <li><a href="about.php">about</a></li>
                                <li><a href="contact.php">contact</a></li>
                                <li><a href="terms-and-condition.php">Terms & Condition</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="javascript:;" onclick="document.getElementById('overlayModal').style.display='block'" style="color: #ffefda !important; text-shadow: 0 0 10px #febd69 !important;">Let's
                                        Start</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 py-2 px-0 text-capitalize footer-links">
                            <h5>Contact Details</h5>
                            <ul class="list-unstyled">
                                <li><a href="tel:+1 (213) 757-2002" class="text-decoration-none ph-number-font"><i class="fa-solid fa-phone pe-2"></i>+1 (213) 757-2002</a>
                                </li>
                                <li><a href="mailto:info@elitebookwriters.com" class="text-decoration-none text-lowercase"><i class="fa-solid fa-envelope pe-2"></i>info@elitebookwriters.com</a></li>
                                <li class="address-c"><i class="fa-solid fa-map-location-dot pe-2"></i>
                                2050 Cheshire Bridge Rd NE, Apt 1421
                                <br>Atlanta, GA 30324
                                <br>United States
                                </li>
                            </ul>
                            <a href="https://www.facebook.com/elitebookwriterss" target="_blank" rel="noopener noreferrer" class="text-center"><i class="fa-brands fa-square-facebook me-2 fs-4" title="Elite Book Writers Facebook"></i></a>
                            <a href="https://www.trustpilot.com/review/elitebookwriters.com" target="_blank" rel="noopener noreferrer" class="text-center"><i class="fa-brands fa-star me-2 fs-4" title="Trustpilot Reviews"></i></a>
                            <a href="https://www.sitejabber.com/reviews/elitebookwriters.com" target="_blank" rel="noopener noreferrer" class="text-center" title="Sitejabber Reviews"><i class="fa-brands fa-square-x-twitter fs-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid copy-right-sec py-4">
        <div class="container ">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 t-sm-center">
                    <p class="m-0">Copyright © 2026 | All Rights Reserved | Elite Book Writers</p>
                </div>
                <div class="col-md-4  py-2 text-center">
                    <img src="./assets/images/card-brands.svg" alt="">
                </div>
            </div>
        </div>
        <style>
            @media screen and (max-width: 767.98px) {
                .t-sm-center {
                    text-align: center;
                }
            }
        </style>
    </section>
</footer>

<!-- Modal -->
<div id="overlayModal">
    <div id="popupModal">
        <section>
            <span class="close" onclick="document.getElementById('overlayModal').style.display='none'">X</span>
            <form method="post" action="code.php">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3">
                        <h5 class="text-white">SIGNUP NOW TO AVAIL</h5>
                        <h2 class="text-white">50% DISCOUNT OFFER</h2>
                        <h6 class="text-white">LIMITED TIME OFFER</h6>
                        <h1 id="counter" class="text-center"></h1>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="py-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="s-banner-name" id="floatingFname" placeholder="Full Name">
                            <label for="floatingFname">Full Name</label>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="s-banner-email" id="floatingEmail" placeholder="Email Address">
                            <label for="floatingEmail">Email address</label>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="form-floating">
                            <input type="number" class="form-control ph-number-font" name="s-banner-phone" id="floatingPhone" placeholder="Phone Number">
                            <label for="floatingPhone">Phone Number</label>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="form-floating">
                            <textarea class="form-control custom-form-control" name="s-banner-msg" placeholder="Enter Message" id="floatingMsg"></textarea>
                            <label for="floatingMsg">Enter Message</label>
                        </div>
                    </div>
                    <div class="w-75 mx-auto">
                        <a href="javascript:void(0);" class="text-decoration-none">
                            <button class="light-btn btn-open form-control" type="submit" name="s-banner-submit">Submit</button>
                        </a>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <script>
        // Timer Countdown Script
        var myTimer;

        function clock() {
            myTimer = setInterval(myClock, 1000);
            var c = 7200;

            function myClock() {
                --c
                var seconds = c % 60;
                var secondsInMinutes = (c - seconds) / 60;
                var minutes = secondsInMinutes % 60;
                var hours = (secondsInMinutes - minutes) / 60;
                console.clear();
                console.log(hours + ":" + minutes + ":" + seconds)
                $("#counter").html(hours + "h " + minutes + "m " + seconds + "s");
                if (c == 0) {
                    clearInterval(myTimer);
                    $("#counter").html("OFFER EXPIRED");
                }
            }
        }
        clock();
    </script>
</div>
<!-- Modal End -->


<!-- Start of elitebookwriters Zendesk Widget script -->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=721de4e8-47b0-4f69-857b-02eb54f1a0d0"> </script> -->
<!-- End of elitebookwriters Zendesk Widget script -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/697a43a62893b51c32bbc67c/1jg2pgh9i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!-- -------------------------------------------------------------------------- -->
<script src="./assets/customs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- -------------------------------------------------------------------------- -->










<!-- Cookie Consent Popup -->
<div id="cookieConsent" class="cookie-consent" role="dialog" aria-live="polite" aria-label="Cookie consent">
  <div class="cookie-card">
    <div class="cookie-text">
      <h6 class="cookie-title">We use cookies</h6>
      <p class="cookie-desc">
        We use cookies to improve your experience, analyze traffic, and keep the site secure.
        <a href="privacy-policy.php" class="cookie-link">Privacy Policy</a>
      </p>
    </div>

    <div class="cookie-actions">
      <button id="cookieReject" class="cookie-btn cookie-btn-outline" type="button">Reject</button>
      <button id="cookieAccept" class="cookie-btn cookie-btn-fill" type="button">Accept all</button>
    </div>
  </div>
</div>

<script>
(function () {
  const KEY = "ebw_cookie_consent";
  const popup = document.getElementById("cookieConsent");
  const btnAccept = document.getElementById("cookieAccept");
  const btnReject = document.getElementById("cookieReject");

  if (!popup || !btnAccept || !btnReject) {
    console.log("Cookie popup elements not found");
    return;
  }

  function showPopup() {
    popup.classList.add("show");
  }

  function hidePopup() {
    popup.classList.remove("show");
  }

  // SHOW if not decided yet
  const existing = localStorage.getItem(KEY);
  if (!existing) {
    setTimeout(showPopup, 600);
  } else {
    // For debugging (remove later)
    // console.log("Cookie consent already set:", existing);
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
</script>










</body>

</html>