<?php  get_header(); ?>

<!-- postbox area start -->
<section class="tp-postbox-ptb p-relative pt-130 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tp-postbox-wrapper">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php endwhile; endif; ?>
                <div class="tp-pagination pt-30">
                    <nav>
                        <?php solub_pagination() ?>
                    </nav>
                </div>

                </div>
            </div>
            <?php if(is_active_sidebar('blog-sidebar')): ?>
            <div class="col-lg-4">
                <div class="tp-sidebar-wrapper pl-45">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    </section>
    <!-- postbox area end -->

<?php get_footer(); 