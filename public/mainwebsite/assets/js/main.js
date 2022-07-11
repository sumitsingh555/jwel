// Active navbar on scroll
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll <= 80) {
    $('nav.navbar').removeClass('nav-active');
  } else {
    $('nav.navbar').addClass('nav-active');
  }
});

$(document).ready(function () {
  function setupIcons() {
    const lightSchemeIcon = document.querySelector('link#light-scheme-icon');
    const darkSchemeIcon = document.querySelector('link#dark-scheme-icon');

    function setLight() {
      document.head.append(lightSchemeIcon);
      darkSchemeIcon.remove();
    }

    function setDark() {
      lightSchemeIcon.remove();
      document.head.append(darkSchemeIcon);
    }


    const matcher = window.matchMedia('(prefers-color-scheme:dark)');
    function onUpdate() {
      if (matcher.matches) {
        setDark();
      } else {
        setLight();
      }
    }
    matcher.addListener(onUpdate);
    onUpdate();
  }

  setupIcons();
});

$(document).ready(function () {
  $('.preloader').addClass('active');
});

// active header for other pages
if (!$('.hero-section').length) {
  $('nav.navbar').addClass('always-nav-active');
}
if ($('.errors-section').length) {
  $('nav.navbar').removeClass('always-nav-active');
}

$('.sidebar_close_btn a').click(function () {
  $('.navbar-collapse').removeClass('show');
});

// $(document).ready(function () {
//   // executes when HTML-Document is loaded and DOM is ready

//   // breakpoint and up
//   $(window).resize(function () {
//     if ($(window).width() >= 980) {
//       // when you hover a toggle show its dropdown menu
//       $('.navbar .dropdown-toggle').hover(function () {
//         $(this).parent().toggleClass('show');
//         $(this).parent().find('.dropdown-menu').toggleClass('show');
//       });

//       // hide the menu when the mouse leaves the dropdown
//       $('.navbar .dropdown-menu').mouseleave(function () {
//         $(this).removeClass('show');
//       });

//       // do something here
//     }
//   });

//   // document ready
// });

// Lazy Load Images
document.addEventListener('DOMContentLoaded', function () {
  let lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));
  let active = false;

  const lazyLoad = function () {
    if (active === false) {
      active = true;

      setTimeout(function () {
        lazyImages.forEach(function (lazyImage) {
          if (
            lazyImage.getBoundingClientRect().top <= window.innerHeight &&
            lazyImage.getBoundingClientRect().bottom >= 0 &&
            getComputedStyle(lazyImage).display !== 'none'
          ) {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.srcset = lazyImage.dataset.srcset;
            lazyImage.classList.remove('lazy');

            lazyImages = lazyImages.filter(function (image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener('scroll', lazyLoad);
              window.removeEventListener('resize', lazyLoad);
              window.removeEventListener('orientationchange', lazyLoad);
            }
          }
        });

        active = false;
      }, 200);
    }
  };

  document.addEventListener('scroll', lazyLoad);
  window.addEventListener('resize', lazyLoad);
  window.addEventListener('orientationchange', lazyLoad);
});

$(document).ready(function () {
  window.scrollBy(0, 1);
});

