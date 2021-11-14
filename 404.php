<?php get_header(); ?>
<?php get_template_part('partials/General/breadcrumb');?>
<section id="_404" class="heights section">
    <div class="container h-100 flex-column-center-center">
        <div class="card-body404">
            <a href="<?php echo site_url(); ?>">
                <span>404 Error</span><br>
                This is a Little bit Wrong!<br>
                So Please Go Back to Home Page and Get a Corect Direction!
            </a>
        </div>
    </div>
</section>
<style>
.card-body404{
    text-align: center;
    position: relative;
    letter-spacing: .025em;
    font-size: 0.875rem;
    border-color: #d1d9e6;
    box-shadow: 3px 3px 6px #b8b9be, -3px -3px 6px #fff;
    color: #31344b;
    background-color: #e6e7ee;
    padding: .45rem .5rem;
    line-height: 1.5;
    border-radius: .55rem;
    display: inline-block;
    font-weight: 400;
}

.card-body404 span{
    font-size:4rem;
}
</style>
<?php get_footer(); ?>