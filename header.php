<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div>
    <header id="head" class="bc-head">
        <div class="bc-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-banner">
                        <a href="<?php bloginfo('siteurl'); ?>/"
                           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Hill River Clare Estate" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-6 col-banner text-right hidden-xs hidden-sm">
                        <h3>
                            <a href="tel:+61888439086" title="Call us">
                                Call us (08) 8843 9086
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-md hidden-lg" href="<?php bloginfo('siteurl'); ?>/"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        HOME
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu(array('menu' => 'Menu 1', 'items_wrap' => '<ul class="nav navbar-nav navbar-left" role="menu">%3$s</ul>', 'container' => false)); ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- #head -->

    <main id="main" class="bc-main" role="main">
