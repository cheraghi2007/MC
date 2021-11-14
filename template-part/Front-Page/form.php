<section id="help" class="heights section">

    <div class="heading">

        <h3><?php the_field('contact_second_header','option'); ?></h3>

    </div>



    <div class="container h-100 flex-column-center-center">

        <?php echo do_shortcode('[gravityform id=1 ajax=true title=false]'); ?>

    </div>

</section>