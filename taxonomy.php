<?php get_header(); ?>
<?php get_template_part('partials/General/breadcrumb');?>
<div class="margin-top"></div>
<section id="home-blog" class="section">
    <div class="heading">
        <h3><?php the_field('portfolio_second_header','option'); ?></h3>
    </div>

    <div class="container">
        <?php if( have_posts() ):?>
        <div class="containergrids">
        <?php while( have_posts() ):the_post();?>
        <div class="card">
            <div class="card-header">
                <img src="<?php echo THEME_DIR_URI; ?>/assets/img/blog-article-2.jpg" alt="">
            </div>
            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                <a href="<?php the_permalink(); ?>">Learn More</a>
            </div>
        </div>
        <?php endwhile;?>
        </div>
        <div class="paginations">
            <?php echo post_pagination();?>
        </div>
        <?php endif;?>
    </div>
</section>
<?php get_footer(); ?>