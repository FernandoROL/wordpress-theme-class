<?php get_header() ?>

<div class="site-content" id="content">
    <div class="content-area" id="primary">
        <main class="site-main" id="main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>404 Page not found</h1>
                        <p>The page you tried to acces does not exist.</p>
                        <p>How about going to the >> <a href="/">Home page</a> <<</p>
                    </header>

                    <div class="error">
                        <?php 
                            the_widget(
                            'WP_Widget_Recent_Posts',
                            [
                                'title' => 'Latest Posts',
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