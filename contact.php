<?php include('header.php');?>
<section class="page-title" style="background-image: url(images/bg/2149271719.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
            <h1 class="title">Contact Us</h1>
        </div>
    </div>
</section>


<!-- Page Contact area start here -->
<section class="contact-details pt-120 pb-120">
    <div class="container">
     
        <div class="">
            <div class="row g-5">
                <div class="col-lg-6 content-column">
                    <div class="inner-column">
                        
                    </div>
                </div>
                <div class="col-lg-6 content-column">
                    <div class="inner-column right-column">
                        <div class="sec-title mb-30">
                            
                            <h3 class="title wow splt-txt mt-3" data-splitting>Get in touch for expert service</h3>
                            <p class="text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We'd love to hear from you! If you have any questions.</p>
                        </div>
                        <form id="contact_form" name="contact_form" action="includes/sendmail.php" method="post">
                            <div class="type-feild">
                                <i class="fa-light fa-user"></i>
                                <input name="form_name" class="required" type="text" placeholder="Your Name*">
                            </div>
                            <div class="type-feild">
                                <i class="fa-light fa-envelope"></i>
                                <input name="form_email" class="required" type="email" placeholder="Email Address*">
                            </div>
                            <div class="type-feild">
                                <i class="fa-light fa-pen-to-square"></i>
                                <textarea name="form_message" class="required"
                                    placeholder="Enter Your Messege here"></textarea>
                            </div>
                            <button class="btn-two"><i class="fa-light fa-paper-plane"></i> Get In Touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Contact area end here -->



<?php include('footer.php');?>