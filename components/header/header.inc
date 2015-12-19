<?php
/**
 * @file
 * Wordpress markup for header area
 */

?>
<div class="header__wrapper">
    <div class="header">
        <div class="pre-topbar-container small">
            <?php if (is_active_sidebar('frontpage-preheader')) : ?>
                <?php dynamic_sidebar('frontpage-preheader'); ?>
            <?php endif; ?>
        </div>
        <div class="topbar-container">
            <div class="wrapper">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo LOGO; ?>"/>
                    </a>
                </div>
                <div class="menu">
                    <nav class="top-bar-section" data-topbar role="navigation"
                         data-options="is_hover: true">

                        <?php zippo_menu(); ?>
                        <div class="language-selector">
                            <?php if (function_exists('languages_list_footer')):?>
                                <?php languages_list_footer(); ?>
                            <?php endif; ?>
                        </div>
                    </nav>
                </div>
                <div class="header-button widget">
                    <a href="<?php echo REGISTRATION_LINK; ?>" class="link-bg">
                        <span class="date"><?php echo RUN_DATE; ?></span>
                        <span class="signup"><?php _e('Sign Up'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

