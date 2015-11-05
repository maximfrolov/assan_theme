<?php get_header(); ?>

<div class="breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>Blog Sidebar</h4>
            </div>
            <div class="col-sm-6 hidden-xs text-right">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>blog-sidebar</li>
                </ol>
            </div>
        </div>
    </div>
</div><!--breadcrumbs-->
<div class="divide80"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="blog-post">
                <a href="#">
                    <div class="item-img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/img/showcase-2.jpg" class="img-responsive" alt="workimg">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>
                </a><!--work link-->
                <ul class="list-inline post-detail">
                    <li>by <a href="#">assan</a></li>
                    <li><i class="fa fa-calendar"></i> 31st july 2014</li>
                    <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                    <li><i class="fa fa-comment"></i> <a href="#">6 Comments</a></li>
                </ul>
                <h2><a href="#">Lorem ipsum dollor sit amet</a></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                </p>
                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
            </div><!--blog post-->
            <div class="blog-post">
                <a href="#">
                    <div class="item-img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/img/showcase-4.jpg" class="img-responsive" alt="workimg">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>
                </a><!--work link-->
                <ul class="list-inline post-detail">
                    <li>by <a href="#">assan</a></li>
                    <li><i class="fa fa-calendar"></i> 31st july 2014</li>
                    <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                    <li><i class="fa fa-comment"></i> <a href="#">6 Comments</a></li>
                </ul>
                <h2><a href="#">Lorem ipsum dollor sit amet</a></h2>

                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
            </div><!--blog post-->
            <div class="blog-post">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="http://player.vimeo.com/video/57175742"></iframe>
                </div>
                <ul class="list-inline post-detail">
                    <li>by <a href="#">assan</a></li>
                    <li><i class="fa fa-calendar"></i> 31st july 2014</li>
                    <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                    <li><i class="fa fa-comment"></i> <a href="#">6 Comments</a></li>
                </ul>
                <h2><a href="#">Video post formate </a></h2>

                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
            </div><!--blog post-->
            <div class="blog-post">

                <iframe height="170" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/62974792&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>

                <ul class="list-inline post-detail">
                    <li>by <a href="#">assan</a></li>
                    <li><i class="fa fa-calendar"></i> 31st july 2014</li>
                    <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                    <li><i class="fa fa-comment"></i> <a href="#">6 Comments</a></li>
                </ul>
                <h2><a href="#">Audio post formate </a></h2>

                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
            </div><!--blog post-->
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Previous Page</a></li>
                <li class="next"><a href="#">Next Page &rarr;</a></li>
            </ul><!--pager-->
        </div><!--col-->
        <div class="col-md-3 col-md-offset-1">
            <div class="sidebar-box margin40">
                <h4>Search</h4>
                <form role="form" class="search-widget">
                    <input type="text" class="form-control">
                    <i class="fa fa-search"></i>
                </form>
            </div><!--sidebar-box-->
            <div class="sidebar-box margin40">
                <h4>Text widget</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                </p>
            </div><!--sidebar-box-->
            <div class="sidebar-box margin40">
                <h4>Categories</h4>
                <ul class="list-unstyled cat-list">
                    <li> <a href="#">Marketing</a> <i class="fa fa-angle-right"></i></li>
                    <li> <a href="#">Videos</a> <i class="fa fa-angle-right"></i></li>
                    <li> <a href="#">Sports</a> <i class="fa fa-angle-right"></i></li>
                    <li> <a href="#">Fashion</a> <i class="fa fa-angle-right"></i></li>
                    <li> <a href="#">Media</a> <i class="fa fa-angle-right"></i></li>
                    <li> <a href="#">Seo</a> <i class="fa fa-angle-right"></i></li>
                    <li> <a href="#">Marketing</a> <i class="fa fa-angle-right"></i></li>
                </ul>
            </div><!--sidebar-box-->
            <div class="sidebar-box margin40">
                <h4>Popular Post</h4>
                <ul class="list-unstyled popular-post">
                    <li>
                        <div class="popular-img">
                            <a href="#"> <img src="<?php bloginfo('template_url'); ?>/img/img-7.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="popular-desc">
                            <h5> <a href="#">blog post image</a></h5>
                            <h6>31st july 2014</h6>
                        </div>
                    </li>
                    <li>
                        <div class="popular-img">
                            <a href="#"> <img src="<?php bloginfo('template_url'); ?>/img/img-8.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="popular-desc">
                            <h5> <a href="#">blog post image</a></h5>
                            <h6>31st july 2014</h6>
                        </div>
                    </li>
                    <li>
                        <div class="popular-img">
                            <a href="#"> <img src="<?php bloginfo('template_url'); ?>/img/img-9.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="popular-desc">
                            <h5> <a href="#">blog post image</a></h5>
                            <h6>31st july 2014</h6>
                        </div>
                    </li>
                </ul>
            </div><!--sidebar-box-->
            <div class="sidebar-box margin40">
                <h4>Tag Cloud</h4>
                <div class="tag-list">
                    <a href="#">Wordpress</a>
                    <a href="#">Design</a>
                    <a href="#">Graphics</a>
                    <a href="#">Seo</a>
                    <a href="#">Development</a>
                    <a href="#">Marketing</a>
                    <a href="#">fashion</a>
                    <a href="#">Media</a>
                    <a href="#">Photoshop</a>
                </div>
            </div>
        </div><!--sidebar-col-->
    </div><!--row for blog post-->
</div><!--blog full main container-->
<div class="divide60"></div>

