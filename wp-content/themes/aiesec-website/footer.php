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
            <?php echo do_shortcode( '[contact-form-7 id="84" title="Contact form 1"]'); ?>
            </form>
        </div>
        <div class="footer-col col-md-5">

            <h3>Find AIESEC nearest you!</h3>
            <select class="form-control-invert" onchange="window.open(this.options[this.selectedIndex].value)">
                <option value="">List of Local Chapters</option>
                <option value="http://stackoverflow.com/">Ateneo de Manila University</option>
                <option value="http://facebook.com/">Cebu</option>
                <option value="http://facebook.com/">Davao</option>
                <option value="http://facebook.com/">De La Salle University</option>
                <option value="http://facebook.com/">Miriam College</option>
                <option value="http://facebook.com/">University of Asia and the Pacific</option>
                <option value="http://twitter.com/">University of the Philippines</option>
                <option value="http://facebook.com/">University of Sto. Tomas</option>
            </select>
            <br>
            <h3>Location</h3>
            <p><?php the_field('location', 'option'); ?></p><br>
            <h3>Connect with Us</h3>
            <ul class="list-inline">
                <li>
                    <a href="<?php the_field('facebook', 'option'); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
                <li>
                    <a href="<?php the_field('twitter', 'option'); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                </li>
                <li>
                    <a href="<?php the_field('linkedin', 'option'); ?>" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
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


<div class="scroll-top page-scroll" id="top-link">
<a class="btn btn-primary">
<i class="fa fa-chevron-up"></i>
</a>
</div>

<div class="scroll-down page-scroll" id="scroll-down">
<a class="btn btn-primary">
<i class="fa fa-phone"></i>
</a>
</div>

<?php wp_footer(); ?>

</body>
</html>