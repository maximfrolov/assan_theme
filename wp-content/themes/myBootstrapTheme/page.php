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
                        <h2><?php the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>">
                            <div class="item-img-wrap">
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('', ['class' => 'img-responsive']); ?>
                                <?php endif; ?>
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <p>
                            <?php the_content(); ?>
                        </p>

                    </div><!--blog post-->

                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--col-->
        <?php get_sidebar(); ?>
    </div><!--row for blog post-->
</div><!--blog full main container-->
<div class="divide60"></div>

<?php get_footer(); ?>
