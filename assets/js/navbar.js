$(function () {
    var nav = $("#navbar");
    position = nav.height();
    $(window).scroll(function () {//Fijar el navbar al hacer scroll 
        if ($(window).scrollTop() > $(nav).position().top) {
            $(nav).addClass("navFixed");
        }
        else {
            $(nav).removeClass("navFixed");
        }
    });

    //Scroll con click en elementos del navbar
    $(".nav-link-scroll").click(function (e) {
        e.preventDefault();
        var elem = $(this).attr('href');
        var navbarHeight = $("#navbar").innerHeight();
        var elemTop = $(elem).position().top;
        var position = elemTop - navbarHeight;
        if(position < 0){
            position = 0;
        }
        $(document).ready(function () {
            $('html, body').animate({
                scrollTop: position
            }, 700);
        });
    });
});