<section id="home-blog" class="blog-front heights section">
    <div class="heading">
        <h3><?php the_field('blog_second_header','option'); ?></h3>
    </div>

    <div class="container h-100 flex-column-center-center">
        <?php 
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            );

            $portfolio_args = new WP_Query($args);
        ?>
        <?php if( $portfolio_args->have_posts() ):?>
        <div class="containergrids">
        <?php while( $portfolio_args->have_posts() ):$portfolio_args->the_post();?>
        <div class="card">
            <div class="card-header">
                <?php the_post_thumbnail(356,237,true); ?>
            </div>
            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                <a href="<?php the_permalink(); ?>">Learn More</a>
            </div>
        </div>
        <?php endwhile;?>
        </div>
        <?php endif;?>
    </div>
</section>