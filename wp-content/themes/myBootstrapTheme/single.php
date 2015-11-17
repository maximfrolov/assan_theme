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
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('', ['class' => 'img-responsive']); ?>
                                <?php else : ?>
                                    <img src="<?php bloginfo('template_url'); ?>/img/showcase-3.jpg" class="img-responsive" alt=""/>
                                <?php endif; ?>
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>
                        </a><!--work link-->
                        <ul class="list-inline post-detail">
                            <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                            <li><i class="fa fa-calendar"></i> <?php the_time('d.m.Y'); ?></li>
                            <li><i class="fa fa-clock-o"></i> <?php the_time('G:i'); ?></li>
                            <li><i class="fa fa-tag"></i> <?php the_category(', '); ?></li>
                            <li><i class="fa fa-comment"></i> <?php comments_popup_link(); ?></li>
                        </ul>
                        <h2><?php the_title(); ?></h2>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div><!--blog post-->

                <?php endwhile; ?>
            <?php endif; ?>
            <div class="about-author">
                <h4 class="colored-text">About the Author</h4>
                <img src="<?php bloginfo('template_url') ?>/img/team-3.jpg" class="img-responsive" alt="">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, <span class="colored-text">adipiscing condimentum tristique</span> vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                </p>
            </div><!--about author-->
            <?php comments_template(); ?>
        </div><!--col-->

        <?php get_sidebar(); ?>

    </div><!--row for blog post-->
</div><!--blog full main container-->
<div class="divide60"></div>

<?php get_footer(); ?>
