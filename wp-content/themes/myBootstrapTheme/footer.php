<footer id="footer">
    <div class="container">
        <div class="row">
            <?php if(!dynamic_sidebar('footer')) : ?>
                <h3>Здесь блок виджетов: Footer</h3>
            <?php endif; ?>
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