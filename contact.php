<?php include 'header.php'; ?>

<section class="container-fluid contact-banner">
    <div class="home-banner-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="text-capitalize text-white">Connect With Us</h3>
                <span class="banner-heading text-capitalize">Contact Us</span>
                <p class="text-white w-75 mx-auto">Discuss How Our Book Writing Services Can Help You to Achieve Your Goals As An Author</p>
                <p class="text-white w-75 mx-auto fw-bold">Everything is in our Hands To Assist You In Achieving Your Goals</p>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid section-banner py-5 ">
    <div class="container">
        <div class="row justify-content-center align-items-center ">

            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10 py-3">
                <div class="text-center mb-5 ">
                    <h1>Contact Details</h1>
                    <div class="para-border-center"></div>
                </div>
                <div class="contact-detail">
                    <h4>phone</h4>
                    <p><i class="fa-solid fa-phone pe-2"></i>+1 (213) 757-2002</p>
                    <div class="para-border-left"></div><br>
                    <h4>email</h4>
                    <p class="text-small"><i class="fa-solid fa-envelope pe-2"></i>info@elitebookwriters.com</p>
                    <div class="para-border-left"></div><br>
                    <h4>Address</h4>
                    <p><i class="fa-solid fa-map-location-dot pe-2"></i>2050 Cheshire bridge Rd Ne Apt 1421, Atlant Georgia, United States 30324</p>
                    <div class="para-border-left"></div><br><br>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
                <div class="text-center">
                    <h1>Message Us</h1>
                    <div class="para-border-center"></div>
                </div>
                <div class="contact-form my-4">
                    <form action="code.php" method="post">
                        <div class="row justify-content-center align-items-center ">
                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 py-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="con-f-name" id="floatingFname" placeholder="First Name" required>
                                    <label for="floatingFname">First Name</label>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 py-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="con-l-name" id="floatingLname" placeholder="Last Name" required>
                                    <label for="floatingLname">Last Name</label>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 py-2">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="con-email" id="floatingEmail" placeholder="Email Address" required>
                                    <label for="floatingEmail">Email address</label>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 py-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="con-phone" id="floatingPhone" placeholder="Phone Number" required>
                                    <label for="floatingPhone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 py-2">
                                <div class="form-floating">
                                    <textarea class="form-control custom-form-control" name="con-msg" placeholder="Enter Message" id="floatingMsg"></textarea>
                                    <label for="floatingMsg">Enter Message</label>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 py-2">
                                <label class="check-form">
                                <input type="checkbox" value="I accept all terms" type="checkbox" name="con-pri" required>
                                    I agree to receive communications by text message from Elite Book Writers. You may opt out by replying STOP or ask for more information by replying HELP.  

   Message frequency varies. Message and data rates may apply. You may review our <a href="https://elitebookwriters.com/privacy-policy.php" target="_blank">Privacy Policy</a> to learn how your data is used.  
                                    

                                    <span class="checkmark"></span>
                                </label>
                            </div>  
                            <div class="w-75 mx-auto">
                                <a href="javascript:;" class="text-decoration-none">
                                    <button class="light-btn btn-open form-control" type="submit" name="con_submit">Submit</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>

<?php include 'footer.php'; ?>