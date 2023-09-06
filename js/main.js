$('.owl-banner').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

$('.owl-test').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


    $(".owl-new").owlCarousel({
      items: 2,
      loop: true,
      mouseDrag: false,
      touchDrag: false,
      pullDrag: false,
      rewind: true,
      autoplay: true,
      margin: 0,
      nav: true,
      animateOut: 'slideOutUp',
      animateIn: 'slideInUp' ,
    });

    $(document).ready(function() {
        $('.youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false,
        });
    });
    
