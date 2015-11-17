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
            <div class="container error-404">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>404</h1>
                        <h3>
                            Упс.! Страница, которую вы искали, не найдена.</h3>
                        <p class="lead">Попробуйте перейти на <span><a href="/">главную</a></span>.</p>
                    </div>
                </div>
            </div>
        </div><!--col-->

        <?php get_sidebar(); ?>

    </div><!--row for blog post-->
</div><!--blog full main container-->
<div class="divide60"></div>

<?php get_footer(); ?>