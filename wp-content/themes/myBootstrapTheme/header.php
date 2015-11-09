<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="top-bar-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 hidden-xs">
                <div class="top-bar-socials">
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-facebook">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-twitter">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-g-plus">
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-g-plus">
                        <i class="fa fa-youtube"></i>
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a href="#" class="social-icon-sm si-gray si-gray-round si-instagram">
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-7 text-right">
                <ul class="list-inline top-dark-right">
                    <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> Support@mail.com</li>
                    <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> +01 1800 453 7678</li>
                    <li><a href="shop-login.html"><i class="fa fa-lock"></i> Login</a></li>
                    <li><a href="shop-register.html"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a class="topbar-icons" href="#"><span><i class="fa fa-search top-search"></i></span></a></li>
                </ul>
                <div class="search">
                    <form role="form">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                        <span class="search-close"><i class="fa fa-times"></i></span>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div><!--top-bar end here-->
<!--navigation -->
<div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Webtiger</a>
        </div>
        <div class="navbar-collapse collapse">
            <div class="nav navbar-nav navbar-right">
                <?php
                    wp_nav_menu(
                        [
                            'depth'       => 2,
                            'menu_class'  => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker'      => new wp_bootstrap_navwalker()
                        ]
                    );
                ?>
           </div>
        </div><!--/.nav-collapse -->
    </div><!--container-->
</div><!--navbar-default-->