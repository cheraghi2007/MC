<section id="resume" class="heights section">

    <div class="container h-100 flex-column-center-center">
        <div class="resume-content">
            <div class="heading">
                <h3><?php the_field('resume_second_header','option'); ?></h3>
            </div>
            <div class="heading">
                <h3><?php the_field('resume_second_header_2','option'); ?></h3>
            </div>
            <?php if( have_rows('my_exprience','option') ):?>
                <div id="my-expriance">
                <?php while( have_rows('my_exprience','option') ) : the_row();
                    $title   = get_sub_field('title');
                    $time   = get_sub_field('time');
                    $description = get_sub_field('description');
                ?>
                    <div class="my-expriance-content">
                        <div class="accordion-resume">
                            <h4 class="title"><?php echo $title; ?></h4>
                            <h5><?php echo $time; ?></h5>
                            <span>+</span>
                        </div>
                        <p><?php echo $description; ?></p>
                    </div>
                <?php endwhile;?>
                </div>
            <?php endif;?>

            <?php if( have_rows('my_education','option') ):?>
                <div id="my-education">
                <?php while( have_rows('my_education','option') ) : the_row();
                    $title   = get_sub_field('name');
                    $time   = get_sub_field('reshteh');
                ?>
                    <div class="my-expriance-content">
                        <div class="accordion-resume">
                            <h4 class="title"><?php echo $title; ?></h4>
                            <h5><?php echo $time; ?></h5>
                        </div>
                    </div>
                <?php endwhile;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>