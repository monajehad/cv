$(document).ready(function () {
    var path_for_aside_menu = window.location.href;
    $('.aside-menu .menu-nav  .menu-item  ').filter(function () {
        return this.href == path_for_aside_menu;
    }).addClass('menu-item-active');

    $('.aside-menu .menu-item').filter(function () {
        return $('a', this).attr('href') === path_for_aside_menu;
    }).closest('.menu-item').addClass('menu-item-open ');
});
