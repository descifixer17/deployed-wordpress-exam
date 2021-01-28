<?php get_header(); ?>

<section id="welcome-section" class="jumbotron text-center">
    <div class="container">
        <h3 class="jumbotron-heading">Hi there! We are the new kids on the block<br>and we build awesome websites and mobile apps.</h3>
        <p>
            <a id="work-with-us-btn" href="#" class="btn btn-primary my-5 py-3">WORK WITH US!</a>
        </p>
    </div>
</section>
<section id="get-in-touch-section" class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading mb-5">GET IN TOUCH</h1>
        <hr>
        <p id="get-in-touch-details" class="text-white my-5">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
        <?php echo do_shortcode('[contact-form-7 id="25" title="Contact"]'); ?>
    </div>
</section>

<?php get_footer(); ?>