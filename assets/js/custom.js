"use strict";

(function ($, root, undefined) {
  $(function () {
    $(document).ready(function () {
      /*------------------------------------*\
      				 MOBILE MENU
      \*------------------------------------*/
      //open mobile sidebar
      $('.mob-menu-bar').on('click', function () {
        $(this).toggleClass('open');
        $('.header-bottom').toggleClass('menu-open');
      }); //mob submenus

      $('header .has-children').click(function (e) {
        $(this).find('.mega-menu').toggleClass('active');
      });
      /*------------------------------------*\
      				 END OF MOBILE MENU
      \*------------------------------------*/

      $("header li.has-children").hover(function () {
        $('.header-waves').addClass("submmenu-active");
      }, function () {
        $('.header-waves').removeClass("submmenu-active");
      });
      /*------------------------------------*\
               BOXES ACCORDIONS
      \*------------------------------------*/

      $('.trigger-accordion-box').click(function () {
        // $(this).find('i').toggleClass('fa-chevron-up');
        //var $el = $(this).find('b');
        //$el.text($el.text() == "View Less" ? "View More": "View Less");
        $(this).parent().siblings().find('.accordion-box_content').slideUp(); // $(this).prev().slideToggle();

        $(this).prev().slideDown();
      });
      $('.close-accordion-box').click(function () {
        // $(this).find('i').toggleClass('fa-chevron-up');
        //var $el = $(this).find('b');
        //$el.text($el.text() == "View Less" ? "View More": "View Less");
        // $(this).parent().siblings().find('.accordion-box_content').slideUp();
        // $(this).prev().slideToggle();
        $('.accordion-box_content').slideUp();
      });
      /*------------------------------------*\
               JOBS TABS
      \*------------------------------------*/

      $('.job-list li').click(function () {
        var jobList = $(this).attr('id');
        $(this).addClass('active').siblings().removeClass('active');
        $('.job-descriptions > div').removeClass('active');
        $('.job-descriptions > div.' + jobList).addClass('active');
      });
      $("#myRange").ionRangeSlider({
        type: 'double',
        min: 0,
        max: 10,
        from: 2,
        to: 8,
        grid: true,
        grid_snap: true
      });
      $('.irs').on('click', function () {
        var rangeFrom = $('.irs-from').text();

        if (rangeFrom < 2) {
          $('.prefix__cls-1').css('fill', '#802b7c');
        } else if (rangeFrom > 5) {
          $('.prefix__cls-2').css('fill', '#802b7c');
        } else {
          $('.prefix__cls-1').css('fill', '#e9e9f4');
        } //  alert(rangeFrom);

      });
      /*------------------------------------*\
               MODAL
      \*------------------------------------*/

      $('.modal-open').click(function () {
        $('.modal, body').addClass('active');
      });
      $('.modal-close, .modal-background').click(function () {
        $('.modal, body').removeClass('active');
      });
      /*------------------------------------*\
               BOTTOM TO TOP ARROW
      \*------------------------------------*/

      $(window).scroll(function () {
        if ($(this).scrollTop() >= 400) {
          $('#return-to-top').fadeIn(200);
        } else {
          $('#return-to-top').fadeOut(200);
        }
      });
      $('#return-to-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 500);
      });
      /*------------------------------------*\
              FOOTER SLIDER
      \*------------------------------------*/

      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        pagination: {
          clickable: true,
          el: '.swiper-pagination'
        }
      });
      /*------------------------------------*\
      				 STICKY HEADER ON SCROLL UP
      \*------------------------------------*/

      var didScroll;
      var lastScrollTop = 0;
      var delta = 5;
      var navbarHeight = $('header').outerHeight(); // var topHeader = $('.header-top').outerHeight();
      //var deltaHeader = navbarHeight;

      $(window).scroll(function (event) {
        didScroll = true;
      });
      setInterval(function () {
        if (didScroll) {
          hasScrolled();
          didScroll = false;
        }
      }, 250);

      function hasScrolled() {
        var st = $(this).scrollTop(); // Make scroll more than delta

        if (Math.abs(lastScrollTop - st) <= delta) return;
        console.log(st); // If scrolled down and past the navbar, add class .nav-up.

        if (st > lastScrollTop && st > navbarHeight) {
          // Scroll Down
          $('header').css('top', '-' + navbarHeight + 'px').removeClass('nav-up');
        } else {
          // Scroll Up
          if (st + $(window).height() < $(document).height()) {
            $('header').css('top', 0).addClass('nav-up');
          }

          if ($(window).scrollTop() == 0) {
            $('header').removeClass('nav-up');
          }
        }

        lastScrollTop = st;
      } //bottom to top

    }); //ready
  });
})(jQuery, void 0);
