<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p><?php echo esc_html(get_theme_mod('set_copyright', '{Set your copyright field in the customizer}')) ?></p>
                </div>
                <nav class="footer-menu">
                    <?php 
                        wp_nav_menu(['theme_location' => 'class_footer_menu', 'depth' => 1]);
                    ?>
                </nav>
            </div>
        </footer>