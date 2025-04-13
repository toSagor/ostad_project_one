<!-- footer area start -->
<footer class="tp-footer-ptb p-relative" data-bg-color="#1F2220">
    <div class="container">
        <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="tp-footer-widget-border pt-90">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="tp-footer-copyright-ptb pt-20 pb-20">
            <div class="row align-items-center">
                <div class="col-lg-6">
                <div class="tp-footer-copyright">
                    <p><?php solub_footer_copyright() ?></p>
                </div>
                                            
                </div>
                <div class="col-lg-6">
                    <div class="tp-footer-widget-social text-lg-end">
                        <?php solub_footer_social(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->