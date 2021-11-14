<section id="help" class="heights section">
    <div class="heading">
        <h3><?php the_field('help_second_header','option'); ?></h3>
    </div>

    <div class="container h-100 flex-column-center-center">
        <?php if( have_rows('help_fields','option') ):?>
            <ul>
            <?php while( have_rows('help_fields','option') ) : the_row();
                $title   = get_sub_field('title');
                $image   = get_sub_field('img');
                $content = get_sub_field('content');
            ?>
                <li>
                    <div class="child-layer">
                        <?php 
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="60" height="60">
                        <?php endif; ?>
                        <h3 class="title"><?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                    </div>
                </li>
            <?php endwhile;?>
            </ul>
        <?php endif;?>
    </div>
</section>