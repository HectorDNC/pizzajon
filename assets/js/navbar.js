$(function () {
    var focus = $(window).scrollTop();
    var nav = $("#navbar");
    if ($(window).scrollTop() > $("#header").height()) {//Si el foco no esta en el header
        $(nav).addClass("navDark");//Se remueve la clase con color oscuro
    }
    $(window).scroll(function () {//Ejecutar al hacer Scroll
        if ($(window).scrollTop() > focus) {
            $(nav).slideUp(1000);//Se oculta al bajar
        }
        else {
            $(nav).addClass("navDark");//Se asigna la clase para color oscuro
            $(nav).slideDown(1000);//Se muestra al subir
            if ($(window).scrollTop() < $("#header").height()) {//Si se hizo scroll hasta el header
                $(nav).removeClass("navDark");//Se remueve la clase con color oscuro
            }
        }
        focus = $(window).scrollTop();//Se graba la nueva posición
    });

    //Scroll con click en elementos del navbar
    $(".nav-link-scroll").click(function (e) {
        e.preventDefault();
        var elem = $(this).attr('href');
        var navbarHeight = $("#navbar").innerHeight();
        var position = $(elem).position().top;
        if (position < 0) {
            position = 0;
        }
        $('html, body').animate({//Se hace scroll hasta el elemento
            scrollTop: position
        }, 600);
        setTimeout(() => {
            $(nav).slideUp(200);//Se oculta el navbar
        }, 900)
    });
});