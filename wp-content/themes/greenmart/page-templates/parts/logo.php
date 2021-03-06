<?php
    $logo = greenmart_tbay_get_config('media-logo');
    $active_theme = greenmart_tbay_get_theme();
?>

<?php if( isset($logo['url']) && !empty($logo['url']) ): ?>
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="header-logo-img" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>
    </div>
<?php else: ?>
    <div class="logo logo-theme">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="header-logo-img" src="<?php echo esc_url_raw( get_template_directory_uri().'/images/'.$active_theme.'/logo.png'); ?>" alt="<?php bloginfo( 'name' ); ?>">
        </a>
    </div>
<?php endif; ?> 