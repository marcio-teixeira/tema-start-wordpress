<header>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <a href="<?php echo get_home_url(); ?>" title="Café Seleto" class="logo">
                    <img class="img-fluid" alt="Café Seleto" title="Café Seleto" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png">
                </a>
            </div>
            <div class="menuTopo col-6 col-sm-8 col-md-8 col-lg-10 col-xl-10">
                <nav class="menuPrincipal d-none d-lg-block">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                    endif;
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<nav id="menuMobile">
    <?php
    if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
</nav>
