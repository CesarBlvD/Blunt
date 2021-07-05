$(function() {

    //Menú fijo
    var heroHeight = $('.hero').innerHeight();
    var barraAltura = $('.barra').innerHeight();



    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > heroHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }

    });

    //Menu responsivo

    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    $(window).resize(function() {
        var windowWidth = $(".barra").width();
        if (windowWidth > 755) {
            $(".navegacion-principal").css({ display: "block" });
        } else {
            $(".navegacion-principal").css({ display: "none" });
        }
    });


});