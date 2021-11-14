<section id="slider" class="heights section">
    <div class="container">

        <?php 
        $image = get_field('slider_img','option');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div id="slider-content">
            <?php the_field('slider_content','option'); ?>
        </div>

    </div>

    <div class="scroll-downs">
        <div class="mousey">
            <div class="scroller"></div>
        </div>
    </div>
</section>