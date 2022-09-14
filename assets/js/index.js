$(document).ready(function () {
    // hero section
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<div class='nav-button owl-prev'><img src='./assets/images/icons/hero-left-arrow.png'></div>", "<div class='nav-button owl-next'><img src='./assets/images/icons/hero-right-arrow.png'></div>"],
        items: 1
    })

    // menu drawer
    const btnOpenDrawer = $("#menu-drawer");
    const btnCloseDrawer = $("#close-drawer");
    const MenuDrawer = $("#mobile-menu-drawer");

    btnOpenDrawer.on('click', () => {
        MenuDrawer.addClass('active');
    });
    btnCloseDrawer.on('click', () => {
        MenuDrawer.removeClass('active');
    });
});