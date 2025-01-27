<?php get_header() ?>

<div class="site-content" id="content">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1><?php _e('404 Page not found', 'tema-aula') ?></h1>
                        <p><?php _e('The page you tried to acces does not exist.', 'tema-aula') ?></p>
                        <p><?php _e('How about going to the', 'tema-aula') ?> >> <a href="/"<?php _e('Home page', 'tema-aula') ?></a> <<</p>
                    </header>

                    <div class="error">
                        <?php 
                            the_widget(
                            'WP_Widget_Recent_Posts',
                            [
                                'title' => __('Latest Posts', 'tema-aula'),
                                'number' => 3
                            ]
                            )
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php get_footer() ?>