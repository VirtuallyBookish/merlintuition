$(document).scroll(function() {

    var $navbar = $('.navbar')
    if($(window).scrollTop() === 0 && !$navbar.hasClass('expanded')) {
        $navbar.removeClass('scrolled')
    } else {
        $navbar.addClass('scrolled')
    }
});

$('.navbar-toggle').click(function() {
    var $navbar = $('.navbar')
    if(!$navbar.hasClass('expanded')) {
        $navbar.addClass('expanded')
    } else if ($navbar.hasClass('expanded')) {
        $navbar.removeClass('expanded')
    }

    if($(window).scrollTop() === 0 && $navbar.hasClass('scrolled')) {
        $navbar.removeClass('scrolled')
    }
})
