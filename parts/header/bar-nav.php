<section class="menu-area">
    <nav class="main-menu">
        <button class="check-button">
            <div class="menu-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </button>
        <?php wp_nav_menu([
            'theme_location' => 'class_main_menu',
            'depth' => 2
        ]) ?>
    </nav>
</section>