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
                        <a href="<?php the_permalink(); ?>">
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
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <p><a href="<?php the_permalink(); ?>" class="btn btn-theme-dark">Read More...</a></p>
                    </div><!--blog post-->

                <?php endwhile; ?>
            <?php else: ?>
                <h4>
                    К сожалению по Вашему запросу ничего не найдено. Попробуйте задать другое условие для поиска.
                </h4>
            <?php endif; ?>

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
