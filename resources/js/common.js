$(document).ready(function() {



    // Preloader
    setTimeout(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    }, 2000);



    // Img
    $("img, a").on("dragstart", function(event) { event.preventDefault(); });



    // Mobile Menu Toggle
    let body = document.querySelector("body");
    let darkBg = document.querySelector(".dark-bg");
    let callPopup = document.querySelectorAll(".call-popup");
    let closePopup = document.querySelectorAll(".popup__close");
    const paddingRight = window.innerWidth - document.documentElement.clientWidth;

    callPopup.forEach(function(item) {

        let popupID = item.getAttribute("href");
        let popup = document.getElementById(popupID.slice(1));

        item.addEventListener('click', event => {
            event.preventDefault();
            let activePopup = document.querySelector(".popup.is-visible");
            console.log(activePopup);
            if ( activePopup != null ) activePopup.classList.remove('is-visible');

            darkBg.classList.add('is-visible');
            popup.classList.add('is-visible');
            body.classList.add('scroll-disabled');
            body.style.paddingRight = paddingRight + 'px';
        });

    });

    closePopup.forEach(function(item) {

        let popup = item.closest('.popup');

        item.addEventListener('click', event => {
            event.preventDefault();
            darkBg.classList.remove('is-visible');
            popup.classList.remove('is-visible');
            body.classList.remove('scroll-disabled');
            body.style.paddingRight = '0px';
        });

    });

    darkBg.addEventListener('click', event => {
        let activePopup = document.querySelector(".popup.is-visible");

        event.preventDefault();
        darkBg.classList.remove('is-visible');
        activePopup.classList.remove('is-visible');
        body.classList.remove('scroll-disabled');
        body.style.paddingRight = '0px';
    });



    // Quantity
    $('.quantity__plus').on('click', function() {
        $(this).parent('.quantity').find('.quantity__input').val(parseInt($(this).parent('.quantity').find('.quantity__input').val(), 10) + 1).change();
    });

    $('.quantity__minus').on('click', function() {
        if (($(this).parent('.quantity').find('.quantity__input').val()) != 1) {
            $(this).parent('.quantity').find('.quantity__input').val(parseInt($(this).parent('.quantity').find('.quantity__input').val(), 10) - 1).change();
        }
    });



    // Only Numbers
    $(".quantity__input").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });



    // Select
    $('.form__select').select2({
        minimumResultsForSearch: -1
    });



    // Popup
    $("[data-fancybox]").fancybox({
        backFocus: false,
        centerOnScroll: true,
        toolbar: true,
        autoFocus: false,
        hideScrollbar: true,
        touch: false
    });

    $("[data-fancybox='gallery-slider']").fancybox({
        backFocus: false,
        centerOnScroll: true,
        toolbar: true,
        autoFocus: false,
        // buttons: ["zoom", "close"],
        transitionEffect: "slide"
    });



    // Slider
    let salonSlider = new Swiper('.salon-slider', {
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        speed: 1200,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });

    let shopSlider = new Swiper('.shop-slider', {
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        speed: 1200,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });

    let teamSlider = new Swiper('.team-slider', {
        spaceBetween: 20,
        slidesPerView: 6,
        loop: false,
        observer: true,
        observeParents: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
            draggable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                slidesPerView: 1.5
            },

            768: {
                slidesPerView: 3
            },

            992: {
                slidesPerView: 4
            },

            1200: {
                slidesPerView: 6
            },
        }
    });

    let mentionSlider = new Swiper('.mention-slider', {
        spaceBetween: 60,
        slidesPerView: 3,
        loop: true,
        speed: 1200,
        pagination: {
            el: '.mention-slider-pag',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },

            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },

            992: {
                slidesPerView: 3
            }
        }
    });



    // Gallery Slider
    let galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 3,
        loop: false,
        freeMode: true,
        loopedSlides: 4, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    let galleryTop = new Swiper('.gallery-slider', {
        spaceBetween: 10,
        loop: false,
        loopedSlides: 4, //looped slides should be the same
        thumbs: {
            swiper: galleryThumbs,
        },
    });



    // Tabs
    $('.tabs-toggle__item').click(function() {

        if (!$(this).hasClass('on')) {

            let tab = $(this).data('toggle');
            let tabs = $(this).closest('.tabs');

            tabs.find('.tabs-toggle__item').each(function() {
                $( this ).removeClass('on');
            });

            $(this).addClass('on');

            tabs.find('.tabs__pane').each(function() {
                $( this ).removeClass('visible');
            });

            setTimeout(function(){
                tabs.find('.tabs__pane').each(function() {
                    $( this ).removeClass('on');
                });

                $(tab).addClass('on');
                $(tab).addClass('visible');
            }, 500);

        }

    });



    // Services Bg
    $( '.services-list__link' ).hover(
        function() {
            let bgID = $(this).data('bg');
            $('.services-bg').removeClass('is-visible');
            $('.services-bg-' + bgID).addClass('is-visible');
            $('.services-section').addClass('is-white');

        }, function() {
            $('.services-bg').removeClass('is-visible');
            $('.services-section').removeClass('is-white');
        }
    );



    // FAQ blocks
    $('.faq-block__toggle').click(function() {
        $(this).closest('.faq-block').toggleClass('on').find('.faq-block__hidden').slideToggle(500);
    });



    // Price line
    $(".price-line__input").slider({
        tooltip: 'hide'
    });

    $(".price-line__input").on("slide", function(slideEvt) {
        var str = slideEvt.value;
        str = str.toString();
        str = str.replace(",", "-");

        $(this).parent('.price-line').find('.price-line__data-val').text(str);
    });



    // Animation
    // Scroll Magic + TimelineMax
    let controller = new ScrollMagic.Controller();

    $(".animation-fade-in").each(function(i) {
        let animatedElement = $(this);
        let animateIn = new TimelineMax();

        animateIn.from(animatedElement, 1, {
            delay: 0.2,
            opacity: 0,
            y: 70,
            ease: Back.out
        });

        new ScrollMagic.Scene({
            triggerElement: this,
            offset: -300,
            reverse: false
        })
        .setTween(animateIn)
        .addTo(controller);
    });

    $(".animation-fade-in-left").each(function(i) {
        let animatedElement = $(this);
        let animateIn = new TimelineMax();

        animateIn.from(animatedElement, 1, {
            delay: 0.2,
            opacity: 0,
            x: -70,
            ease: Back.out
        });

        new ScrollMagic.Scene({
            triggerElement: this,
            offset: -300,
            reverse: false
        })
        .setTween(animateIn)
        .addTo(controller);
    });

    $(".animation-fade-in-right").each(function(i) {
        let animatedElement = $(this);
        let animateIn = new TimelineMax();

        animateIn.from(animatedElement, 1, {
            delay: 0.2,
            opacity: 0,
            x: 70,
            ease: Back.out
        });

        new ScrollMagic.Scene({
            triggerElement: this,
            offset: -300,
            reverse: false
        })
        .setTween(animateIn)
        .addTo(controller);
    });

    $(".animation-zoom-in").each(function(i) {
        let animatedElement = $(this);
        let animateIn = new TimelineMax();

        animateIn.from(animatedElement, 1, {
            delay: 0.2,
            opacity: 0,
            scale: 0.8,
            ease: Back.out
        });

        new ScrollMagic.Scene({
            triggerElement: this,
            offset: -300,
            reverse: false
        })
        .setTween(animateIn)
        .addTo(controller);
    });




});




// Google map
function initMap() {
    let mapOptions = {
        zoom: 17,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        },
        mapTypeControl: false,
        scaleControl: false,
        scrollwheel: false,
        streetViewControl: false,
        draggable: true,
        center: new google.maps.LatLng(55.76784629679354, 37.62344347114432),
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    };

    let mapElement = document.getElementById('google-map');

    let map = new google.maps.Map(mapElement, mapOptions);

    let marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(55.76784629679354, 37.62344347114432),
        icon: "img/map-marker.svg",
        map: map,
        title: 'Москва, Цветной бульвар, д.2'
    });

    let marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(55.68127805881979, 37.38883190063039),
        icon: "img/map-marker.svg",
        map: map,
        title: 'Московская область, Ул. Тихая, д 27, п. Заречье'
    });

    $('.show-map').click(function() {
        map.setCenter({
            lat : $(this).data('lat'),
            lng : $(this).data('lng')
        });
    });

    $('.show-map:first').click();
}
