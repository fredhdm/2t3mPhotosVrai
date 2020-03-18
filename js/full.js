$(document).ready(function () {
    /*Global*/
    var effectsEnd = 'animationend oAnimationEnd MozAnimationEnd webkitAnimationEnd';

    /*Mosaique*/
    var effectsL = 'fadeIn';
    var effectsR = 'fadeIn';


    $('div.cover:nth-child(2n+1)').addClass(effectsL).one(effectsEnd, function () {
        //$(this).removeClass(effects);
    });

    $('div.cover:nth-child(2n+2)').addClass(effectsR).one(effectsEnd, function () {
        //$(this).removeClass(effects);
    });

    /*Big Picture*/
    var effectsBP = 'animated fadeIn';
    $('div.pageLabel').addClass(effectsBP);

    if ($(document).width() <= 768) {

        $('.ts .content .mosaique').removeClass('traitementDeStar');
    } else {
        $('.ts .content .mosaique').addClass('traitementDeStar');
    }

});


$(window).resize(function () {

    if ($(document).width() <= 768) {

        $('.ts .content .mosaique').removeClass('traitementDeStar');
    } else {
        $('.ts .content .mosaique').addClass('traitementDeStar');
    }

});
