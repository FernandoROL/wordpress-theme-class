        <footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p>Cool theme footer text</p>
                </div>
                <nav class="footer-menu">
                    <?php 
                        wp_nav_menu(['theme_location' => 'class_footer_menu', 'depth' => 1]);
                    ?>
                </nav>
            </div>
        </footer>
    </div>
    <?php wp_footer() ?>
</body>
</html>