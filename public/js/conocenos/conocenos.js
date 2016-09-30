/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*	**********	Modificacion de estilo de barra de navegación de ventana	**********	*/
$('#formaBuscar').css('visibility', 'hidden');

//		**********		Comenzar reproducción de video de fondo		***********	

function reproduceVideo() {
    document.getElementById('videoFondo').play();
    document.getElementById('videoFondo').loop = true;
}

$(document).ready(function () {

    /*para el menú hamburguesa*/
    var trigger = $('.hamburgerConocenos'),
            overlay = $('.overlayConocenos'),
            isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    overlay.click(function () {
        isClosed = true;
        hamburger_cross();
        $('#wrapperConocenos').toggleClass('toggled');
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapperConocenos').toggleClass('toggled');
    });
    /*fin para el menú hamburguesa*/


    /*para el scroll*/
    $('.click').click(function (e) {
        // prevent default action
        e.preventDefault();

        // get id of target div (placed in href attribute of anchor element)
        // and pass it to the scrollToElement function
        // also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
        scrollToElement($(this).attr('href'), 2000);
    });

    var scrollToElement = function (el, ms) {
        var speed = (ms) ? ms : 600;
        $('html,body').animate({
            scrollTop: $(el).offset().top
        }, speed);
    }

    /*fin para el scroll*/

    /*botón aparece bottom scroll*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
    /*botón aparece bottom scroll*/
});