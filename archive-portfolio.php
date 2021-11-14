<?php get_header(); ?>

<?php get_template_part('partials/General/breadcrumb');?>

<div class="margin-top"></div>

<section id="archive-portfolio" class="section">

    <div class="heading">

        <h3><?php the_field('portfolio_second_header','option'); ?></h3>

    </div>



    <div class="container containergrids">

        <?php 

            $args = array(

                'post_type'      => 'portfolio',

                'posts_per_page' => 9,

            );



            $portfolio_args = new WP_Query($args);

        ?>

        <?php if( $portfolio_args->have_posts() ):?>

        

        <?php while( $portfolio_args->have_posts() ):$portfolio_args->the_post();?>

        <div class="card">

            <div class="card-body">

                <h3 class="card-title"><?php the_title(); ?></h3>

                <a href="<?php the_field('website_url'); ?>" target="_blank">Go to Website URL</a>

            </div>

        </div>

        <?php endwhile;?>

        
        <?php
            global $wp_query;
            if (  $wp_query->max_num_pages > 1 )
                echo '<div class="misha_loadmore">More Posts</div>';
        ?>
        <?php endif;?>

    </div>

</section>

<?php get_footer(); ?>