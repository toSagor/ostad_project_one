<?php

function solub_header_logo() {
    $black_logo = get_theme_mod('solub_black_logo', get_template_directory_uri().'/assets/img/logo/logo-black.png');
    ?>
    <a href="index.html">
        <img data-width="130" src="<?php echo esc_url($black_logo); ?>" alt="<?php echo esc_attr__('Black Logo', 'solub'); ?>">
    </a>
<?php }

function solub_header_social() { 
    $social_fb = get_theme_mod('social_fb', __('#', 'solub'));
    $social_x = get_theme_mod('social_x', __('#', 'solub'));
    $social_in = get_theme_mod('social_in', __('#', 'solub'));
    $social_pin = get_theme_mod('social_pin', __('#', 'solub'));    
?>
    <?php if ($social_fb): ?>
    <a href="<?php echo esc_url($social_fb); ?>"><i class="fa-brands fa-facebook"></i></a>
    <?php endif; ?>
    <?php if ($social_x): ?>
    <a href="<?php echo esc_url($social_x); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg></a>
    <?php endif; ?>
    <?php if ($social_in): ?>
    <a href="<?php echo esc_url($social_in); ?>"><i class="fa-brands fa-instagram"></i></a>
    <?php endif; ?>
    <?php if ($social_pin): ?>
    <a href="<?php echo esc_url($social_pin); ?>"><i class="fa-brands fa-pinterest"></i></a>
    <?php endif; ?>
<?php } ?>

