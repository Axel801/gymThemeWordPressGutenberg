$(function () {
    $(window).scroll(() => {
        let headerNav = $('.navbar-header');
        if (headerNav.offset().top > 90 ) {
            $('body').addClass('no-top');
            headerNav.addClass('no-top');
        } else {
            $('body').removeClass('no-top');
            headerNav.removeClass('no-top');
        }
    })
});