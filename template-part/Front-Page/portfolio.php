<section id="portfolio-front" class="heights section">

    <div class="heading">

        <h3><?php the_field('portfolio_second_header','option'); ?></h3>

    </div>



    <div class="container h-100 flex-column-center-center">

        <?php 

            $args = array(

                'post_type' => 'portfolio',

                'posts_per_page' => 6,

            );



            $portfolio_args = new WP_Query($args);

        ?>

        <?php if( $portfolio_args->have_posts() ):?>

            <ul>

            <?php while( $portfolio_args->have_posts() ):$portfolio_args->the_post();?>

                <li>

                    <a href="<?php the_field('website_url'); ?>" class="child-layer" target="_blank">

                        <h3 class="title"><?php the_title(); ?></h3>

                    </a>

                </li>

                <?php endwhile;?>

            </ul>

            <a class="archive-button" href="<?php echo site_url();?>/portfolio/">Portfolio Archive</a>


        <?php endif;?>

    </div>

</section>