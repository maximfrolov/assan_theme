<div class="col-md-3 col-md-offset-1">
    <div class="sidebar-box margin40">
        <h4>Поиск</h4>
        <form role="form" class="search-widget">
            <input name="s" type="text" class="form-control">
            <i class="fa fa-search"></i>
        </form>
    </div><!--sidebar-box-->
    <?php if(!dynamic_sidebar('sidebar')) : ?>
        <h4>Здесь блок виджетов сайдбара</h4>
    <?php endif; ?>
</div>