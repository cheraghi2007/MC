<section id="about" class="heights section">
    <div class="heading">
        <h3><?php the_field('about_second_header','option'); ?></h3>
    </div>

    <div class="container h-100 flex-column-center-center">
        <div class="about-description">
            <div class="about-description-content">
                <?php the_field('about_description','option'); ?>
            </div>
            <div class="about-expriance">
                <?php the_field('about_expriance','option'); ?>
            </div>
        </div>
    </div>
</section>