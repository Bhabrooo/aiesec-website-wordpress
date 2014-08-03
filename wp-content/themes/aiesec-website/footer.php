<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Foxtart Base Theme
 */
?>

<!-- Footer -->
<footer class="text-center">
<div class="footer-above">
<div class="container">

    <div class="row">
        <div class="footer-col col-md-7">
            <h3>Contact Us</h3>
            <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Message</label>
                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                </div>
            </div>
        </form>
        </div>
        <div class="footer-col col-md-5">
            <h3>Location</h3>
            <p>Unit 104 Xavierville Ave, <br> Loyola Heights, Quezon City</p><br>
            <h3>Connect with Us</h3>
            <ul class="list-inline">
                <li>
                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="footer-below">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            Copyright &copy; AIESEC Philippines 2014
        </div>
    </div>
</div>
</div>
</footer>


<div class="scroll-top page-scroll">
<a class="btn btn-primary" href="#page-top">
<i class="fa fa-chevron-up"></i>
</a>
</div>

<div class="scroll-down page-scroll" id="scroll-down">
<a class="btn btn-primary" href="#contact">
<i class="fa fa-phone"></i>
</a>
</div>

<?php wp_footer(); ?>

</body>
</html>