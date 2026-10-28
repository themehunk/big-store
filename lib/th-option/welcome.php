<div class="theme_link">
    <span class="th-step">1</span>
    <h3><?php _e('Install Recommended Plugins','big-store'); ?></h3>
    <p><?php _e('We highly Recommend to install ThemeHunk Customizer plugin to get all customization options in Big Store theme. Also install recommended plugins available in recommended tab.','big-store'); ?></p>
    <p class="th-card-actions">
        <a href="<?php echo esc_url( admin_url('themes.php?page=thunk_started&th-tab=recommended-plugin') ); ?>" class="button button-primary"><?php _e('View Plugins','big-store'); ?></a>
    </p>
</div>

<div class="theme_link">
    <span class="th-step">2</span>
    <h3><?php _e('Setup Home Page','big-store'); ?></h3>
    <p><?php _e('To set up the HomePage in Big Store theme, Just follow the below given Instructions.','big-store'); ?></p>
    <ol class="th-list">
        <li><?php _e('Go to Wp Dashboard > Pages > Add New > Create a Page using “Home Page Template” available in Page attribute.','big-store'); ?></li>
        <li><?php _e('Now go to Settings > Reading > Your homepage displays > A static page (select below) and set that page as your homepage.','big-store'); ?></li>
    </ol>
    <?php
    if($this->_check_homepage_setup()){
        $class = "activated";
        $btn_text = __("Home Page Activated",'big-store');
        $Bstyle = "display:none;";
        $style = "display:inline-flex;";
    }else{
        $class = "default-home";
        $btn_text = __("Set Home Page",'big-store');
        $Bstyle = "display:inline-block;";
        $style = "display:none;";
    }
    ?>
    <p class="th-card-actions">
        <button style="<?php echo esc_attr($Bstyle); ?>" class="button button-primary <?php echo esc_attr($class); ?>"><?php echo esc_html($btn_text);?></button>
        <span class="th-done alink" style="<?php echo esc_attr($style); ?>"><span class="dashicons dashicons-yes-alt"></span><?php _e('Home Page Activated','big-store'); ?></span>
        <a target="_blank" href="https://themehunk.com/docs/big-store/#homepage-setting" class="button"><?php _e('Go to Doc','big-store'); ?></a>
    </p>
</div>

<div class="theme_link">
    <span class="th-step">3</span>
    <h3><?php _e('Customize Your Website','big-store'); ?></h3>
    <p><?php _e('Big Store theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','big-store'); ?></p>
    <p class="th-card-actions">
        <a href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="button button-primary"><?php _e("Start Customize","big-store"); ?></a>
    </p>
</div>

<div class="theme_link">
    <span class="th-step">4</span>
    <h3><?php _e("Customizer Links","big-store"); ?></h3>
    <div class="th-quick-links">
        <a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>"><span class="dashicons dashicons-format-image"></span><?php _e("Upload Logo","big-store"); ?></a>
        <a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=big-store-section-header-group') ); ?>"><span class="dashicons dashicons-table-row-before"></span><?php _e("Header Options","big-store"); ?></a>
        <a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=big-store-gloabal-color') ); ?>"><span class="dashicons dashicons-art"></span><?php _e("Global Colors","big-store"); ?></a>
        <a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=big-store-panel-frontpage') ); ?>"><span class="dashicons dashicons-layout"></span><?php _e("FrontPage Sections","big-store"); ?></a>
        <a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=woocommerce') ); ?>"><span class="dashicons dashicons-cart"></span><?php _e("Woocommerce","big-store"); ?></a>
        <a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=big-store-section-footer-group') ); ?>"><span class="dashicons dashicons-table-row-after"></span><?php _e("Footer Section","big-store"); ?></a>
    </div>
</div>
