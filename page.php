<?php get_header(); ?>
<?php get_template_part('partials/General/breadcrumb');?>
<div class="margin-top"></div>
<section id="single-blog" class="section">
    <div class="heading">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="container">
        <?php if( have_posts() ):?>
        <div class="containergrids-single">
        <?php while( have_posts() ):the_post();?>
        <div class="single-card">
            <div class="single-header">
                <?php the_post_thumbnail(1136,640); ?>
            </div>
            <div class="single-body">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile;?>
        </div>
        <?php endif;?>
    </div>
</section>
<?php get_footer(); ?>