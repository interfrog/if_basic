function elementInViewport() {
    var rows = document.querySelectorAll('#page .row[data-inview="false"]');
    if (rows.length < 1) return;
    var doc = document.documentElement;
    var pageTop = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
    rows.forEach(function (row, i) {
        var top = row.offsetTop;
        var style = window.getComputedStyle(row, null).getPropertyValue('font-size');
        var fontSize = parseFloat(style);
        var transitionBuffer = parseInt(5 * fontSize * i);
        if ((top - transitionBuffer) <= (parseInt(pageTop) + window.innerHeight)) {
            row.setAttribute('data-inview', 'true');
        }
    });
}

function updateFooterStickyness() {
    var footer = document.getElementById('pagefooter');
    var footerTop = footer.getBoundingClientRect().top;
    var footerHeight = footer.getBoundingClientRect().height;
    var docHtml = document.documentElement;
    if (window.innerHeight > parseInt(footerTop + footerHeight)) {
        docHtml.classList.add("stickyfooter");
    } else {
        docHtml.classList.remove("stickyfooter");
    }
}

$(document).ready(function () {
    $('.csc-textpic-caption').each(function () {
        var text = $(this).text();
        var image = $(this).prev();
        if (text.length > 0) {
            $(this).css({
                'width': image.outerWidth() + 'px'
            });
        }
    });

    $('.slickSlider').each(function () {
        if ($(this).attr('data-autoplay') == 0 && $(this).attr('data-autoplay')) {
            var autoplay = false;
        } else {
            var autoplay = true;
        }

        var slideSpeed = (typeof $(this).attr('data-slidespeed') === 'undefined') ? 300 : parseInt($(this).attr('data-slidespeed'));
        var autoSpeed = (typeof $(this).attr('data-autospeed') === 'undefined') ? 6400 : parseInt($(this).attr('data-autospeed'));

        $(this).slick({
            lazyLoad: 'progressive',
            dots: true,
            infinite: true,
            arrows: true,
            speed: slideSpeed,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: autoplay,
            autoplaySpeed: autoSpeed,
            adaptiveHeight: true,
            prevArrow: '<span href="#" class="prev slickNav"><i class="fa fa-angle-left"></i></span>',
            nextArrow: '<span href="#" class="next slickNav"><i class="fa fa-angle-right"></i></span>'
        });
    });

    $('#mediaMenu .icon').each(function () {
        var newMargin = parseInt($(this).find('.hint').outerWidth()) / 2;
        $(this).find('.hint').css({
            'margin-left': '-' + newMargin + 'px'
        });
    });


    $(document).on('click', '.mainmenu ul.Level1>li.dropdown>a', function (event) {
        if ($('.mobile').is(':visible')) {
            event.preventDefault();
            $('ul.Level1 li').toggleClass('subactive');
            $(this).parent().toggleClass('subactive');
            $(this).parent().toggleClass('active');
            if ($(this).parent('li').children('ul').attr("style") === "left: 0px;") {
                $(this).parent('li').children('ul').animate({
                    left: '100vw'
                }, {
                    duration: 500
                });
            } else {
                $(this).parent('li').children('ul').animate({
                    left: '0'
                }, {
                    duration: 500
                });
            }
        }
    });

    $(document).on('click', '.mainmenu ul.Level2>li.dropdown>a', function (event) {
        if ($('.mobile').is(':visible')) {
            event.preventDefault();
            $('ul.Level2 li').toggleClass('subactive');
            $('ul.Level2').css({
                top: 0
            });
            $('ul.Level1 li').toggleClass('subactive');
            $('.dropdown.subactive.active>li').show();
            $(this).parent().toggleClass('subactive');
            $(this).parent().toggleClass('active');
            if ($(this).parent('li').children('ul').attr("style") === "left: 0px;") {
                $(this).parent('li').children('ul').animate({
                    left: '100vw'
                }, {
                    duration: 500
                });
            } else {
                $(this).parent('li').children('ul').animate({
                    left: '0'
                }, {
                    duration: 500
                });
            }
        }
    });

    $(document).on('click', '#nav-toggle', function (event) {
        event.preventDefault();
        $(this).next('.mainmenu').slideToggle(250);
        return false;
    });

    $(document).on('click', '.accordionBox', function (event) {
        $(this).toggleClass('open');
        $(this).next('.accordionInner').slideToggle(250);
    });

    $(document).on('click', '#fontSizer a', function (event) {
        event.preventDefault();
        var elementsToResize = '#page, .mainmenu, footer',
            currenFontSize = parseInt($(elementsToResize).css('font-size')),
            resizeDifference = 1;
        if ($(this).hasClass('makeItSmaller')) {
            var newSize = currenFontSize - resizeDifference;
        }
        if ($(this).hasClass('makeItBigger')) {
            var newSize = currenFontSize + resizeDifference;
        }
        $(elementsToResize).css({
            'font-size': newSize + 'px'
        });
        return false;
    });

    //inserted for offCanvas
    $(document).on('click', '.mobileMenuTrigger', function (event) {
        event.preventDefault();
        var action = $(this).attr('data-action');
        $('#siteWrapper').attr('data-status', action);
        return false;
    });

    $(document).on('click', '.permanentOffCanvasTrigger', function (event) {
        event.preventDefault();
        var action = $(this).attr('data-action');
        if (action == "open") {
            $(this).attr('data-action', 'close');
        } else {
            $(this).attr('data-action', 'open');
        }
        $('#siteWrapper').attr('data-status', action);
        return false;
    });

    $(document).on('click', '.offCanvasMenu .subOpener, .permanentOffCanvas .subOpener', function (event) {
        event.preventDefault();
        var currentStatus = $(this).attr('data-status');
        switch (currentStatus) {
            case "open":
                $(this).attr('data-status', 'close');
                $(this).next().slideUp(250);
                break;
            case "close":
                $(this).attr('data-status', 'open');
                $(this).next().slideDown(250);
                break;
        }
        return false;
    });

    $(document).on('click', '.accordeonWrapper .opener', function () {
        var status = $(this).attr('data-status');
        var thisElement = $(this);
        switch (status) {
            case "open":
                break;
            case "close":
                var openElement = $(this).parents('.accordeonWrapper').find('.opener[data-status="open"]');
                if (openElement.length > 0) {
                    openElement.attr('data-status', 'close');
                    openElement.next('.foldout').slideUp(250);
                }
                thisElement.attr('data-status', 'open');
                thisElement.next('.foldout').slideDown(250);
                break;
        }
    });

    $('a[rel="lightbox[myImageSet]"],.fancybox, .lightbox').fancybox({
        maxWidth: 1000,
        maxHeight: 1000,
        padding: 0,
        autoSize: true,
        autoScale: true,
    });

    $(window).on("resize", function () {
        elementInViewport();
        updateFooterStickyness();
    });

    $(window).on("scroll", function () {
        elementInViewport();
    })

    elementInViewport();
    updateFooterStickyness();
});