$('.album-carousel').owlCarousel({
    loop: true,
    items: 6,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: false,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: false
        },
        576: {
            items: 3,
            nav: false
        },
        767: {
            items: 4,
            nav: false
        },
        992: {
            items: 4,
            nav: true
        },
        1299: {
            items: 4,
            nav: true
        },
        1499: {
            items: 4,
            nav: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

$('.product-carousel').owlCarousel({
    loop: true,
    items: 4,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        1200: {
            items: 1,
        },
    },
});

var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
  };