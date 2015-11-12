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
                <?php if(!dynamic_sidebar('footer_3')) : ?>
                    <h3>Здесь блок виджетов: Footer 3</h3>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-sm-6 margin30">
                <?php if(!dynamic_sidebar('footer_4')) : ?>
                    <h3>Здесь блок виджетов: Footer 4</h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-btm">
                    <span>&copy;2014. Theme by Design_mylife</span>
                </div>
            </div>
        </div>
    </div>
</footer><!--footer end here-->
<?php wp_footer(); ?>
</body>
</html>