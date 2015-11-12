<footer id="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 margin30">
                <?php if(!dynamic_sidebar('footer_1')) : ?>
                    <h3>Здесь блок виджетов: Footer 1</h3>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-sm-6 margin30">
                <?php if(!dynamic_sidebar('footer_2')) : ?>
                    <h3>Здесь блок виджетов: Footer 2</h3>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>Featured Work</h3>
                    <ul class="list-inline f2-work">
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-1.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-2.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-3.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-4.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-5.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-6.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-7.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-8.jpg" class="img-responsive" alt=""></a></li>
                        <li><a href="portfolio-single.html"><img src="<?php bloginfo('template_url'); ?>/img/img-9.jpg" class="img-responsive" alt=""></a></li>
                    </ul>
                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam,
                    </p>
                    <form role="form" class="subscribe-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                        </div>
                    </form>
                </div>
            </div><!--footer col-->

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-btm">
                    <span>&copy;2014. Theme by Design_mylife</span>
                </div>
            </div>
        </div>
    </div>
</footer><!--default footer end here-->
<?php wp_footer(); ?>
</body>
</html>