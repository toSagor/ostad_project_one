<?php  get_header(); ?>

<!-- postbox area start -->
<section class="tp-page-area pt-130 pb-120">
    <div class="container">
        <div class="tp-page-wrapper">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- postbox area end -->

<?php get_footer(); 