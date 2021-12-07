$(function () {
    
    var focus = $(window).scrollTop();
    console.log(focus)
    var nav = $("#navbar");
    if($(window).scrollTop() > $("#header").height()){//Si el foco no esta en el header
        $(nav).addClass("navDark");//Se remueve la clase con color oscuro
    }
    $(window).scroll(function () {//Ejecutar al hacer Scroll
        if ($(window).scrollTop() > focus) {
            
            console.log("bajar")
            $(nav).slideUp(1000);//Se oculta al bajar
        }
        else {
            $(nav).addClass("navDark");//Se asigna la clase para color oscuro
            $(nav).slideDown(1000);//Se muestra al subir
            if($(window).scrollTop() < $("#header").height()){//Si se hizo scroll hasta el header
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