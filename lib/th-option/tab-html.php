<?php
$getUrlTab = isset($_GET['th-tab']) && $_GET['th-tab'] ? sanitize_key($_GET['th-tab']) : false;
$tabActiveWl =  $getUrlTab == 'welcome' ? 'active' : '';
$tabActiveRp =  $getUrlTab == 'recommended-plugin' ? 'active' : '';
$tabActiveImportDc =  $getUrlTab == 'import-demo-content' ? 'active' : '';
$tabActiveGtChild =  $getUrlTab == 'get-child-theme' ? 'active' : '';
$tabActiveFreePRo =  $getUrlTab == 'free-vs-pro' ? 'active' : '';
$tabActiveHelp =  $getUrlTab == 'help' ? 'active' : '';
if (!$tabActiveWl && !$tabActiveRp && !$tabActiveImportDc && !$tabActiveGtChild && !$tabActiveFreePRo && !$tabActiveHelp) {
    $tabActiveWl = 'active';
}
?>

<div class="wrap-th about-wrap-th theme_info_wrapper">

    <div class="th-option-area">
        <div class="th-option-top-hdr">
            <a class="th-brand" target="_blank" href="<?php echo esc_url( $theme_header['theme_brand_url'] ); ?>/?wp=big-store">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/th-option/assets/images/icon.png" alt="<?php echo esc_attr( $theme_header['theme_brand'] ); ?>"/>
            </a>
            <div class="th-option-heading">
                <div class="th-badges">
                    <span class="th-badge version"><?php echo esc_html( $theme_header['v'] ); ?></span>
                    <span class="th-badge free"><?php esc_html_e('Free Theme','big-store'); ?></span>
                </div>
                <h2><?php echo esc_html( $theme_header['welcome'] ); ?></h2>
                <p><?php echo esc_html( $theme_header['welcome_desc'] ); ?></p>
            </div>
            <div class="th-hdr-actions">
                <a href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="th-btn th-btn-light"><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Customize','big-store'); ?></a>
                <a href="https://themehunk.com/product/big-store/" target="_blank" class="th-btn th-btn-pro"><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Upgrade to Pro','big-store'); ?></a>
            </div>
        </div>
        <nav class="th-option-bottom-hdr">
            <a class="tablinks <?php echo esc_attr($tabActiveWl) ?>" onclick="openTab(event, 'Welcome')"><span class="dashicons dashicons-admin-home"></span><?php _e('Welcome','big-store');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveRp) ?>" onclick="openTab(event, 'Recommended-Plugin')"><span class="dashicons dashicons-admin-plugins"></span><?php _e('Recommended Plugin','big-store');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveImportDc) ?>" onclick="openTab(event, 'Import-Demo-Content')"><span class="dashicons dashicons-download"></span><?php _e('Demo Import','big-store');?></a>
            <a class="tablinks get-child <?php echo esc_attr($tabActiveGtChild) ?>" onclick="openTab(event, 'Get-Child-Theme')"><span class="dashicons dashicons-admin-appearance"></span><?php _e('Get Child Theme','big-store');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveFreePRo) ?>" onclick="openTab(event, 'Free-Vs-Pro')"><span class="dashicons dashicons-awards"></span><?php _e('Free Vs Pro','big-store');?></a>
            <a class="tablinks <?php echo esc_attr($tabActiveHelp) ?>" onclick="openTab(event, 'Help')"><span class="dashicons dashicons-sos"></span><?php _e('Help','big-store');?></a>
        </nav>
    </div>

    <div class="content-wrap">
        <div class="tab-left">

            <div id="Welcome" class="tabcontent <?php echo esc_attr($tabActiveWl) ?>">
                <div class="rp-two-column welcome-tabs">
                    <?php include('welcome.php' ); ?>
                </div>
            </div>

            <div id="Import-Demo-Content" class="tabcontent <?php echo esc_attr($tabActiveImportDc) ?>">
                <div class="theme_link import-demo">
                    <div class="import-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/th-option/assets/images/import.png" alt="">
                    </div>
                    <div class="title-plugin">
                        <h3><?php _e('Click Here To Import Demo Content','big-store'); ?></h3>
                        <p><?php _e('You need to Install required plugins like- Themehunk Customizer, WooCommerce and One click demo import plugin. After installing required plugins import button will activate.', 'big-store'); ?></p>
                        <a class="button disabled importdemo"><?php _e( 'Import Demo', 'big-store' ); ?></a>
                    </div>
                </div>
                <h3 class="th-section-title"><?php esc_html_e('Required Plugins','big-store'); ?></h3>
                <div class="th-plugin-grid">
                    <?php $this->plugin_install('import-demo-content'); ?>
                </div>
            </div>

            <div id="Recommended-Plugin" class="tabcontent <?php echo esc_attr($tabActiveRp) ?>">
                <div class="th-plugin-grid">
                    <?php $this->plugin_install(); ?>
                </div>
            </div>

            <div id="Free-Vs-Pro" class="tabcontent <?php echo esc_attr($tabActiveFreePRo) ?>">
                <?php include('free-pro.php' ); ?>
            </div>

            <div id="Get-Child-Theme" class="tabcontent <?php echo esc_attr($tabActiveGtChild) ?>">
                <?php require BIG_STORE_THEME_DIR . 'lib/th-option/get-child-theme.php'; ?>
            </div>

            <div id="Help" class="tabcontent <?php echo esc_attr($tabActiveHelp) ?>">
                <div class="rp-two-column">
                    <?php include('need-help.php' ); ?>
                </div>
            </div>

        </div>

        <aside class="sidebar-wrap">
            <?php include('sidebar.php' ); ?>
        </aside>
    </div>

</div>
