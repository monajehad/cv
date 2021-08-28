$(document).ready(function () {
    var path_for_aside_menu = window.location.href;
    $('.kt-aside-menu .menu-item a').filter(function () {
        return this.href == path_for_aside_menu;
    }).parent().addClass('kt-menu__item--active');

    $('.kt-aside-menu .kt-menu__item').filter(function () {
        return $('a', this).attr('href') === path_for_aside_menu;
    }).closest('.kt-menu__item--submenu').addClass('kt-menu__item--open');
});
