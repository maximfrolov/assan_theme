<?php get_header(); ?>

<div class="breadcrumb-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>мой блог</h4>
            </div>
            <div class="col-sm-6 hidden-xs text-right">
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li>блог</li>
                </ol>
            </div>
        </div>
    </div>
</div><!--breadcrumbs-->
<div class="divide80"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>

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
                            <li><i class="fa fa-user"></i> <a href="#"><?php the_author(); ?></a></li>
                            <li><i class="fa fa-calendar"></i> <?php the_time('d.m.Y'); ?></li>
                            <li><i class="fa fa-clock-o"></i> <?php the_time('G:i'); ?></li>
                            <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                            <li><i class="fa fa-comment"></i> <a href="#"><?php comments_popup_link(); ?></a></li>
                        </ul>
                        <h2><a href="#"><?php the_title(); ?></a></h2>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
                    </div><!--blog post-->

                <?php endwhile; ?>
            <?php endif; ?>

            <!--<div class="blog-post">
                <a href="#">
                    <div class="item-img-wrap">
                        <img src="<?php /*bloginfo('template_url'); */?>/img/showcase-2.jpg" class="img-responsive" alt="workimg">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>
                </a><!--work link-->
                <!--<ul class="list-inline post-detail">
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
            <!--<div class="blog-post">
                <a href="#">
                    <div class="item-img-wrap">
                        <img src="<?php /*bloginfo('template_url'); */?>/img/showcase-4.jpg" class="img-responsive" alt="workimg">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>
                </a><!--work link-->
                <!--<ul class="list-inline post-detail">
                    <li>by <a href="#">assan</a></li>
                    <li><i class="fa fa-calendar"></i> 31st july 2014</li>
                    <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                    <li><i class="fa fa-comment"></i> <a href="#">6 Comments</a></li>
                </ul>
                <h2><a href="#">Lorem ipsum dollor sit amet</a></h2>

                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
            </div><!--blog post-->
            <!--<div class="blog-post">
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
            <!--<div class="blog-post">

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

    <?php get_sidebar(); ?>

    </div><!--row for blog post-->
</div><!--blog full main container-->
<div class="divide60"></div>

<?php get_footer(); ?>
