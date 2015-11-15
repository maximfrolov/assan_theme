/* add class on ul and adding the element i to unit categories */
$(function() {
    $('div.sidebar-box ul li.cat-item').parent('ul').addClass('cat-list').end()
        .children('a').after('<i class="fa fa-angle-right"></i>');
});