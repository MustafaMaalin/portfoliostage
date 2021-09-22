<html <?php language_attributes(); ?> style="margin-top:0!important;">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<header>
    <body>
    <nav class="navbar" id="navbarId">
            <div class="logo-container"><a class="logo" target="_blank" href="https://google.nl"> <img class="logo-image" src="<?php echo get_template_directory_uri()."/assets/images/mustafa-logo.png";?>"> </a></div>
            <div class="menu-container">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary' ) ); ?>
            </div>
    </nav>

</header>
