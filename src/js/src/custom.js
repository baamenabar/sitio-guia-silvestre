jQuery(document).ready(function ($) {
    "use strict";
    //For Pretty Photo Validation
    $('a[data-rel]').each(function () {
        $(this).attr('rel', $(this).data('rel'));
    });

    

    /*
    //Recent News Posts Images Effect
    $(' #da-thumbs > li ').each(function () {
        $(this).hoverdir();
    });
    //*/

    //Recent News Post Slider 
    if ($('.recent-slider').length) {
        $('.recent-slider').bxSlider({
            pagerCustom: '#bx-pager-cp'
        });
    }

    /*
    //Next Event Contdown
    if ($('.defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('.defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }

    //Event Page Contdown
    if ($('.defaultCountdown-2').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('.defaultCountdown-2').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }
    //*/

    //Latest Blog Slider 
    if ($('#latest-blog-slider').length) {
        $('#latest-blog-slider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }

    //Our Chrity Store
    if ($('#flexiselDemo1').length) {
        $("#flexiselDemo1").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });
    }

    //Parallax Effect
    //$(window).stellar();

    //Home Testimonials Slider 
    if ($('#home-textimonials-slider').length) {
        $('#home-textimonials-slider').bxSlider({
            mode: 'fade',
            captions: true
        });
    }

    //Footer Twitter Updates Slider 
    if ($('#twitter-updates-slider').length) {
        $('#twitter-updates-slider').bxSlider({
            mode: 'fade',
            auto: true,
            captions: true

        });
    }

    //Latest Events Masonry Gallery
    if ($('#container').length) {
        $('#container').BlocksIt({
            numOfCol: 3,
            offsetX: 1,
            offsetY: 1
        });
    }
    //Newslatter Slider 
    if ($('#newslatter-slider').length) {
        $('#newslatter-slider').bxSlider({
            mode: 'fade',
            auto: true,
            captions: true

        });
    }


    //Google Map on Contact Page
    if ($('#map_contact_2').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222)
            //Initialize MAP
        var myOptions = {
            zoom: 11,
            center: myLatLng,
            disableDefaultUI: true,
            zoomControl: true,
            styles: [{
                stylers: [{
                    hue: '#333333'
                }, {
                    saturation: -10
                }, ]
            }],
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map_contact_2'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });
        marker.getPosition();
        //End marker

        //Set info window
        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '<p>Location Address</p>' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><i class="icon-map-marker"></i>Location Summary' +
            '</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            //content: contentString,
            position: myLatLng,
            icon: 'images/map-icon-2.png'
        });
        var marker, i;
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.open(map);
            }
        })(marker, i));
    }

/*
    //Google Map Event Detail
    if ($('#map_contact_3').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222)
            //Initialize MAP
        var myOptions = {
            zoom: 11,
            center: myLatLng,
            disableDefaultUI: true,
            zoomControl: true,
            styles: [{
                stylers: [{
                    hue: '#333333'
                }, {
                    saturation: -10
                }, ]
            }],
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map_contact_3'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });
        marker.getPosition();
        //End marker

        //Set info window
        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '<p>Location Address</p>' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><i class="icon-map-marker"></i>Location Summary' +
            '</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            //content: contentString,
            position: myLatLng,
            icon: 'images/map-icon-2.png'
        });
        var marker, i;
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.open(map);
            }
        })(marker, i));
    }
    //Google Map Funding Detail
    if ($('#map_contact_4').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222)
            //Initialize MAP
        var myOptions = {
            zoom: 11,
            center: myLatLng,
            disableDefaultUI: true,
            zoomControl: true,
            styles: [{
                stylers: [{
                    hue: '#333333'
                }, {
                    saturation: -10
                }, ]
            }],
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map_contact_4'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });
        marker.getPosition();
        //End marker

        //Set info window
        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '<p>Location Address</p>' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><i class="icon-map-marker"></i>Location Summary' +
            '</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            //content: contentString,
            position: myLatLng,
            icon: 'images/map-icon-2.png'
        });
        var marker, i;
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.open(map);
            }
        })(marker, i));
    }

    //Google Map On Footer
    if ($('#map_contact_5').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222)
            //Initialize MAP
        var myOptions = {
            zoom: 11,
            center: myLatLng,
            disableDefaultUI: true,
            zoomControl: true,
            styles: [{
                stylers: [{
                    hue: '#333333'
                }, {
                    saturation: -10
                }, ]
            }],
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map_contact_5'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map
        });
        marker.getPosition();
        //End marker

        //Set info window
        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '<p>Location Address</p>' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><i class="icon-map-marker"></i>Location Summary' +
            '</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            //content: contentString,
            position: myLatLng,
            icon: 'images/map-icon-2.png'
        });
        var marker, i;
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.open(map);
            }
        })(marker, i));
    }
    //*/

    //BxSlider For Home Banner
    //*
    if ($('#home-banner').length) {
        $('#home-banner').bxSlider({
            pagerCustom: '#bx-pager',
            //randomStart: true,
            speed: 800,
            auto:true,
            autoStart: true,
            pause: 7000
        });
    }
    //*/
//*
    //Timeline 
    if ($('.timeline-slider').length) {

        $('.timeline-slider').bxSlider({
            pagerCustom: '#bx-pager-2'
        });
    }

    //Sidebar Tabs
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })

    //Charity Slider 
    if ($('#charity-slider').length) {
        $('#charity-slider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }

    //Sidebar Testimonial Slider 
    if ($('#sidebar-testimonial').length) {
        $('#sidebar-testimonial').bxSlider({
            mode: 'fade',
            auto: true,
            captions: true

        });
    }

    //Contact Tweeetar Slider 
    if ($('#contact-twitter').length) {
        $('#contact-twitter').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }

    //Pretty Photo
    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }

    //Work Banner Slider 
    if ($('#work-banner').length) {
        $('#work-banner').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }

    //Top Project Slider 
    if ($('#top-project').length) {
        $('#top-project').bxSlider({
            auto: true,
            autoControls: true
        });
    }

    //Project Gallery Slider 
    if ($('#project-gallery').length) {
        $('#project-gallery').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }
    //Color Switcher
    if ($('.slide-out-div').length) {
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle', //class of the element that will be your tab
            pathToTabImage: 'images/gear.png', //path to the image for the tab (optionaly can be set using css)
            imageHeight: '40px', //height of tab image
            imageWidth: '40px', //width of tab image  
            tabLocation: 'left', //side of screen where tab lives, top, right, bottom, or left
            speed: 300, //speed of animation
            action: 'click', //options: 'click' or 'hover', action to trigger animation
            topPos: '200px', //position from the top
            fixedPosition: false //options: true makes it stick(fixed position) on scroll
        });
    }

    //Indicator Section 
    if ($('#indicatore-slider').length) {
        $('#indicatore-slider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }
//*/
    //Function End
});

$(window).load(function(){
    //fix de layout para los <figure>
    var figs = $('figure','#main').not('.flotada');
    figs.each(function(i,ele){
        $(ele).css('max-width', $(ele).find('img').width());
    });
});
