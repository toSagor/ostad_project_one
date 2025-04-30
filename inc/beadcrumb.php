<?php 
function solub_beadcrumb() {
    global $post;
    $title = get_the_title();

    $beadcrumb_imag = get_theme_mod('beadcrumb_imag');

?>
    <!-- beadcrumb area start -->
    <div class="tp-breadcrumb__ptb tp-breadcrumb__bg p-relative z-index-1 fix" data-background="<?php echo esc_url($beadcrumb_imag); ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content p-relative">
                    <h3 class="tp-breadcrumb__title white"><?php echo esc_html($title); ?></h3>
                    <div class="tp-breadcrumb__list white">
                        <?php bcn_display(); ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- beadcrumb area end -->
<?php
}