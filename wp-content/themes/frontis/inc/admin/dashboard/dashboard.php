<?php
namespace Frontis;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function frontis_theme_dashboard() {
    $icon = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjM0ODkgNi45OTc5MUwxMi43NTM1IDcuODEyMDJDMTIuOTU1NCA3LjkyOTE1IDEzLjEyMyA4LjA5NzYzIDEzLjIzOTUgOC4zMDA1MUMxMy4zNTYgOC41MDMzOSAxMy40MTc0IDguNzMzNTMgMTMuNDE3NCA4Ljk2Nzc5VjkuODI5OTRDMTMuNDE3NCAxMC4wNjQyIDEzLjM1NiAxMC4yOTQzIDEzLjIzOTUgMTAuNDk3MkMxMy4xMjMgMTAuNzAwMSAxMi45NTU0IDEwLjg2ODYgMTIuNzUzNSAxMC45ODU3TDExLjM0ODkgMTEuNzk5OEw5LjI3MjQ0IDEzLjAwMzZMNy44NjUxMyAxMy44MjA0QzcuNjYzMyAxMy45Mzc1IDcuNDM0MzUgMTMuOTk5MiA3LjIwMTMgMTMuOTk5MkM2Ljk2ODI1IDEzLjk5OTIgNi43MzkzIDEzLjkzNzUgNi41Mzc0NyAxMy44MjA0TDUuMTMyODEgMTMuMDAzNlYxMC42MDEzTDcuMjAxMyAxMS44MDI1TDkuMjcyNDQgMTAuNjAxM0wxMS4zNDA5IDkuNDAyODdMOS4yNzI0NCA4LjIwMTczTDcuMjAxMyA3LjAwMDU5TDkuMjcyNDQgNS43OTY3N0wxMS4zNDA5IDQuNTk4M0w5LjI3MjQ0IDMuMzk3MTVMNy4yMDEzIDIuMTk4NjdMNS4xMzI4MSAwLjk5NzUzTDYuNTM3NDcgMC4xODA3NTNDNi43MzkzIDAuMDYzNjE3IDYuOTY4MjUgMC4wMDE5NTMxMiA3LjIwMTMgMC4wMDE5NTMxMkM3LjQzNDM1IDAuMDAxOTUzMTIgNy42NjMzIDAuMDYzNjE3IDcuODY1MTMgMC4xODA3NTNMOS4yNjk3OCAwLjk5NzUzTDExLjMzNTYgMi4xOTg2N0wxMi43NDAzIDMuMDE1NDVDMTIuOTQyMSAzLjEzMjU4IDEzLjEwOTcgMy4zMDEwNiAxMy4yMjYyIDMuNTAzOTRDMTMuMzQyOCAzLjcwNjgyIDEzLjQwNDEgMy45MzY5NiAxMy40MDQxIDQuMTcxMjJWNS4wMzA3MUMxMy40MDQxIDUuMjY0OTggMTMuMzQyOCA1LjQ5NTExIDEzLjIyNjIgNS42OTc5OUMxMy4xMDk3IDUuOTAwODcgMTIuOTQyMSA2LjA2OTM0IDEyLjc0MDMgNi4xODY0N0wxMS4zNDg5IDYuOTk3OTFaIiBmaWxsPSIjMEIwQzBFIi8+CjxwYXRoIGQ9Ik01LjEzNDMyIDMuMzk5ODdMMy4wNjg0OSA0LjU5NTY4VjExLjgwMjVMMS42NjY0OCAxMC45ODg0QzEuNDY0MTYgMTAuODcxNiAxLjI5NjAzIDEwLjcwMzMgMS4xNzkwMyAxMC41MDA0QzEuMDYyMDIgMTAuMjk3NSAxLjAwMDI3IDEwLjA2NzIgMSA5LjgzMjY3VjQuMTY1OTRDMS4wMDAwMSAzLjkzMTY4IDEuMDYxMzUgMy43MDE1NCAxLjE3Nzg4IDMuNDk4NjZDMS4yOTQ0IDMuMjk1NzggMS40NjIgMy4xMjczIDEuNjYzODMgMy4wMTAxN0wyLjQwMiAyLjU4MzFDMi42MDM4MyAyLjQ2NTk2IDIuODMyNzggMi40MDQzIDMuMDY1ODMgMi40MDQzQzMuMjk4ODggMi40MDQzIDMuNTI3ODMgMi40NjU5NiAzLjcyOTY2IDIuNTgzMUw1LjEzNDMyIDMuMzk5ODdaIiBmaWxsPSIjMzk5Q0ZGIi8+CjxwYXRoIGQ9Ik05LjI3MjAyIDUuNzk3Nkw3LjIwMDg4IDYuOTk4NzRMNS43OTYyMiA3LjgxMjg1QzUuNTk0MzkgNy45Mjk5OSA1LjM2NTQ0IDcuOTkxNjYgNS4xMzIzOSA3Ljk5MTY2QzQuODk5MzQgNy45OTE2NiA0LjY3MDM5IDcuOTI5OTkgNC40Njg1NiA3LjgxMjg1TDMuMDU4NTkgNi45OTg3NEw1LjEyNzA4IDUuODAwMjdMNi41MzQzOSA0Ljk4MzVDNi43MzYyMiA0Ljg2NjM2IDYuOTY1MTcgNC44MDQ2OSA3LjE5ODIyIDQuODA0NjlDNy40MzEyNyA0LjgwNDY5IDcuNjYwMjIgNC44NjYzNiA3Ljg2MjA1IDQuOTgzNUw5LjI3MjAyIDUuNzk3NloiIGZpbGw9IiMzOTlDRkYiLz4KPC9zdmc+Cg==';
    add_menu_page(
        __('Frontis', 'frontis'),
        __('Frontis', 'frontis'),
        'manage_options',
        'frontis',
        FRONTIS_NAMESPACE . 'frontis_dashboard_content',
        $icon,
        30
    );
}

add_action('admin_menu', FRONTIS_NAMESPACE . 'frontis_theme_dashboard');

function frontis_dashboard_content() {
    $site_editor_url = admin_url('site-editor.php');
    $documentation_url = 'https://docs.wpmessiah.com/docs/frontis-theme/';
    $support_url = 'https://support.wpmessiah.com/';
    $frontis_blocks_url = admin_url('plugin-install.php?s=Frontis Blocks&tab=search&type=term');
    $top_table_of_contents_url = admin_url('plugin-install.php?s=TOP Table Of Contents&tab=search&type=term');
    $wp_mobile_bottom_menu_url = admin_url('plugin-install.php?s=WP Mobile Bottom Menu&tab=search&type=term');
    $ai_image_alt_text_generator_url = admin_url('plugin-install.php?s=Ai Image Alt Text Generator for WP&tab=search&type=term');
    $wp_ai_copilot_url = admin_url('plugin-install.php?s=WP AI CoPilot – AI content writer plugin, ChatGPT WordPress, GPT-3/4 , Ai assistance&tab=search&type=term');
    ?>
    <div class="wrap frontis-dashboard-wrapper"> 
        <div class="frontis-dashboard-container">
            <div class="frontis-dashboard-inner">
                <div class="frontis-dashboard-content"> 
                    <p class="frontis-admin-name">
                        <?php 
                            printf( esc_html__('Hello %s,', 'frontis'), esc_html( wp_get_current_user()->display_name ) ); 
                        ?>
                    </p>
                    <h1 class="frontis-dashboard-title"><?php esc_html_e('Welcome to Frontis', 'frontis'); ?></h1>
                    <p><?php esc_html_e('Frontis is a fast, fully customizable & beautiful WordPress theme suitable for blogs, portfolios, business websites, and WooCommerce stores. It is lightweight and offers unparalleled speed.', 'frontis'); ?></p>
                    <div class="frontis-dashboard-buttons">
                        <a href="<?php echo $site_editor_url; ?>" class="btn-primary"><?php esc_html_e('Start Customising', 'frontis'); ?></a>
                        <a href="<?php echo $documentation_url; ?>" target="_blank" class="btn-secondary"><?php esc_html_e('Read Documentation', 'frontis'); ?></a>
                    </div>
                </div>
                <div class="frontis-dashboard-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mfu-rrr8s-o?si=TUlFuiWKVmv70jOs"></iframe>
                </div>
            </div>
            <hr>
            <div class="frontis-dashboard-cards-wrapper">
                <div class="quick-settings">
                    <div class="header">
                        <h3><?php esc_html_e('Features at a Glance', 'frontis'); ?></h3>
                        <a href="<?php echo $support_url; ?>" target="_blank" class="support-link"><?php esc_html_e('Get Support', 'frontis'); ?></a>
                    </div>
                    <div class="settings-grid">
                        <div class="setting-item">
                            <h4><?php esc_html_e('Full Site Editing', 'frontis'); ?></h4>
                            <p><?php esc_html_e('Customize every part of your site\'s design directly within the WordPress editor, no coding required.', 'frontis'); ?></p>
                        </div>
                        <div class="setting-item">
                            <h4><?php esc_html_e('Speed Optimization', 'frontis'); ?></h4>
                            <p><?php esc_html_e('Frontis prioritizes Fast Loading Times with optimized code and assets, enhancing user experience and boosting SEO.', 'frontis'); ?></p>
                        </div>
                        <div class="setting-item">
                            <h4><?php esc_html_e('Pre-designed Block Patterns', 'frontis'); ?></h4>
                            <p><?php esc_html_e('Use and customize a variety of ready-made designs for sections like hero areas and testimonials.', 'frontis'); ?></p>
                        </div>
                        <div class="setting-item">
                            <h4><?php esc_html_e('Theme Customization Options', 'frontis'); ?></h4>
                            <p><?php esc_html_e('It is easy to manage global styles such as colors, typography, and layouts using the Global Style Manager.', 'frontis'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="extend-website">
                    <h3><?php esc_html_e('Extend Your Website', 'frontis'); ?></h3>
                    <ul class="plugin-list">
                        <li>
                            <div>
                                <h4><?php esc_html_e('Frontis Blocks', 'frontis'); ?></h4>
                                <p><?php esc_html_e('Free WordPress Page Builder.', 'frontis'); ?></p>
                            </div>
                            <a href="<?php echo esc_url( $frontis_blocks_url ); ?>" class="install-btn"><?php esc_html_e('Install', 'frontis'); ?></a>
                        </li>
                        <li>
                            <div>
                                <h4><?php esc_html_e('TOP Table Of Contents', 'frontis'); ?></h4>
                                <p><?php esc_html_e('Create a table of contents for your posts and pages.', 'frontis'); ?></p>
                            </div>
                            <a href="<?php echo esc_url( $top_table_of_contents_url ); ?>" class="install-btn"><?php esc_html_e('Install', 'frontis'); ?></a>
                        </li>
                        <li>
                            <div>
                                <h4><?php esc_html_e('WP Mobile Bottom Menu', 'frontis'); ?></h4>
                                <p><?php esc_html_e('Create a mobile bottom menu for your WordPress site.', 'frontis'); ?></p>
                            </div>
                            <a href="<?php echo esc_url( $wp_mobile_bottom_menu_url ); ?>" class="install-btn"><?php esc_html_e('Install', 'frontis'); ?></a>
                        </li>
                        <li>
                            <div>
                                <h4><?php esc_html_e('Ai Image Alt Text Generator for WP', 'frontis'); ?></h4>
                                <p><?php esc_html_e('Generate alt text for your images automatically.', 'frontis'); ?></p>
                            </div>
                            <a href="<?php echo esc_url( $ai_image_alt_text_generator_url ); ?>" class="install-btn"><?php esc_html_e('Install', 'frontis'); ?></a>
                        </li>
                        <li>
                            <div>
                                <h4><?php esc_html_e('WP AI CoPilot', 'frontis'); ?></h4>
                                <p><?php esc_html_e('AI content writer plugin, ChatGPT WordPress.', 'frontis'); ?></p>
                            </div>
                            <a href="<?php echo esc_url( $wp_ai_copilot_url ); ?>" class="install-btn"><?php esc_html_e('Install', 'frontis'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
}
