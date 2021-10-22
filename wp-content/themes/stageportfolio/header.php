<html <?php language_attributes(); ?> style="margin-top:0!important;">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://mustafamaalin.nl">
    <?php wp_head(); ?>

</head>
<header>
    <body>

    <nav class="navbar" id="navbarId">
            <div class="logo-container"><a class="logo" href="#"> <img class="logo-image" src="<?php echo get_template_directory_uri()."/assets/images/mustafa-logo.png";?>"> </a></div>
        <a href="#" class='toggle-button'>
            <div class="bar bar-1" ></div>
            <div class="bar bar-2" ></div>
            <div class="bar bar-3" ></div>
        </a>
        <div class="menu-container">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary' ) ); ?>
        </div>
    </nav>

</header>
