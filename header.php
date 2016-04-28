<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo(); ?><?php wp_title('|'); ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <nav class="navbar navbar-default">
                    <div class="site-brand-container text-center">
                        <a class="site-logo" href="<?php bloginfo('url'); ?>">
                            <?php bloginfo(); ?>
                        </a>
                        <small class="site-tagline"><?php bloginfo('description'); ?></small>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">