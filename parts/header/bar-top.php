<section class="top-bar">
    <div class="container">
        <div class="logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?>
                <a href=" <?php echo home_url('/'); ?> "> <span><?php bloginfo('name'); ?> </span></a>
            <?php
            } ?>
        </div>
        <div class="searchbox">
            <?php get_search_form() ?>
        </div>
    </div>
</section>