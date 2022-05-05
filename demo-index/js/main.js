/*
  FlatApp Script
*/
(function ($) {
  "use strict";
  $(window).on('load', function () {
    $('body').addClass('loaded');
  });
  /*=========================================================================
    Sticky Header
  =========================================================================*/
  $(function () {
    var header = $("#header"),
      yOffset = 0,
      triggerPoint = 2;
    $(window).on('scroll', function () {
      yOffset = $(window).scrollTop();
      if (yOffset >= triggerPoint) {
        header.addClass("fixed-top");
      } else {
        header.removeClass("fixed-top");
      }
    });
  });
  /*=========================================================================
    Screenshot Carousel
  =========================================================================*/
  // if ($('.screen-shot-carousel').length) {
	 //  $('.screen-shot-carousel').owlCarousel({
	 //    loop: true,
	 //    autoplay: true,
	 //    smartSpeed: 1000,
	 //    margin: 40,
	 //    dots: false,
	 //    nav: true,
	 //    navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
	 //    responsive: {
	 //      0: {
	 //        items: 2,
	 //        margin: 15,
	 //      },
	 //      480: {
	 //        items: 3,
	 //        margin: 20,
	 //      },
	 //      768: {
	 //        items: 4,
	 //        margin: 40,
	 //      }
	 //    }
	 //  });  	
  // }
  /*=========================================================================
    Review Carousel
  =========================================================================*/
  if ($('.clinte-carousel').length) {
	  $('.clinte-carousel').owlCarousel({
	    loop: true,
	    autoplay: false,
	    center: true,
	    autowidth: true,
	    nav: true,
	    smartSpeed: 1000,
	    navText: [
	      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
	      '<i class="fa fa-angle-right" aria-hidden="true"></i>'
	    ],
	    margin: 25,
	    dots: false,
	    responsive: {
	      0: {
	        items: 1
	      },
	      480: {
	        items: 2
	      },
	      768: {
	        items: 3
	      }
	    }
	  });  	
  }
  /*=========================================================================
    Counter Up Active
  =========================================================================*/
  // var counterSelector = $('.counter');
  // counterSelector.counterUp({
  //  delay: 10,
  //  time: 2000
  // });
  /*=========================================================================
    Initialize smoothscroll plugin
  =========================================================================*/
  // smoothScroll.init({
  //  offset: 60
  // });
  /*=========================================================================
    Swipebox active
  =========================================================================*/
  // $( '.lightbox' ).swipebox();
  $(document).on('keypress', 'input, textarea', function () {
    $(this).removeClass('error');
    $(this).removeClass('invalidEmailID');
  });
  $(document).on('keypress', '#mobilenumber', function () {
    $(this).closest('.iti--allow-dropdown').removeClass('error');
  });
  $("#sendSubscribe").on('click', function () {
    if (document.subscribeForm.subscribe_email.value == "") {
      document.subscribeForm.subscribe_email.focus();
      document.subscribeForm.subscribe_email.classList.add('error');
      return false;
    }
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (document.subscribeForm.subscribe_email.value.match(mailformat)) {
      document.subscribeForm.subscribe_email.classList.remove('invalidEmailID');
    } else {
      document.subscribeForm.subscribe_email.classList.add('invalidEmailID');
      return false;
    }
    var subscribe_email = document.getElementById('subscribe_email').value;
    $.ajax({
      url: "https://hlthera.com/api/subscribe",
      type: 'POST',
      data: {
        'email': subscribe_email
      },
      success: function (data) {
        $("#sendSubscribe").attr('disabled', 'disabled');
        $('#subscribe-modal').modal('hide');
        $("#success-modal").modal('show');
        setTimeout(function () {
          $("#success-modal").modal('hide');
          $("#sendSubscribe").attr('disabled', false);
        }, 4000);
        document.getElementById('subscribe_email').value = '';
      }
    });
  });
  /*=========================================================================
      wow Settings
  =========================================================================*/
  // var wow = new WOW( {
  //     mobile: false,
  //     offset: 0
  // });
  // wow.init();
  AOS.init();
  /*=========================================================================
      Subscribe Form
  =========================================================================*/
  // $('.subs-btn').on('click', function (event) {
  //   event.preventDefault();
  //   var name_attr = [];
  //   var values = [];
  //   var fs_process = "";
  //   if ($(this).closest("section").attr('id') !== undefined) {
  //     var section_id = $(this).closest("section").attr('id');
  //   } else {
  //     var section_id = $(this).closest("footer").attr('id');
  //   }
  //   $('#' + section_id).find('form').find('button').text('loading...');
  //   $('#' + section_id).find('form input').each(
  //     function (index) {
  //       if ($(this).is('[data-email="required"]')) {
  //         var required_val = $(this).val();
  //         if (required_val != '') {
  //           name_attr.push($(this).attr('name'));
  //           values.push($(this).val());
  //           fs_process = true;
  //         } else {
  //           $('#' + section_id).find('form').find('button').text('Send');
  //           $(this).addClass('fs-input-error');
  //           fs_process = false;
  //         }
  //       }
  //       if (!$(this).is('[data-email="required"]')) {
  //         name_attr.push($(this).attr('name'));
  //         values.push($(this).val());
  //       }
  //     });
  //   if (fs_process) {
  //     localStorage.setItem('fs-section', section_id);
  //     $.post("mail/process.php", {
  //       data: {
  //         input_name: name_attr,
  //         values: values,
  //         section_id: section_id
  //       },
  //       type: "POST",
  //     }, function (data) {
  //       $('#loading').remove();
  //       var fs_form_output = '';
  //       if (data) {
  //         if (data.type == "fs-message") {
  //           $('#error-msg').remove();
  //           $('#success-msg').remove();
  //           var fs_form_output = '<div id="success-msg" class="padding-15 mt-15 bdrs-3" style="border: 1px solid green; color: green;">' + data.text + '</div>';
  //           $('#' + section_id).find('form').find('button').text('Success');
  //         } else if (data.type == "fs_error") {
  //           $('#' + section_id).find('form').find('button').text('Send');
  //           $('#success-msg').remove();
  //           $('#error-msg').remove();
  //           var fs_form_output = '<div id="error-msg" class="padding-15 mt-15 bdrs-3" style="border: 1px solid red; color: red;">' + data.text + '</div>';
  //         } else {
  //           var fs_form_output = '';
  //         }
  //       }
  //       if (fs_form_output != '') {
  //         var section_id = localStorage.getItem('fs-section');
  //         $('#' + section_id).find('form').after(fs_form_output);
  //       }
  //       $('#' + section_id).find('form input').each(function (index) {
  //         $(this).val('');
  //         $(this).removeClass('fs-input-error');
  //       });
  //       setTimeout(function () {
  //         $('#success-msg').fadeOut();
  //         $('#success-msg').remove();
  //         $('#error-msg').fadeOut();
  //         $('#error-msg').remove();
  //         $(this).submit();
  //         $('#' + section_id).find('form').find('button').text('Send');
  //       }, 4000);
  //       localStorage.removeItem('fs_section');
  //     }, 'json');
  //   }
  //   $('#' + section_id).find('form input').each(function (index) {
  //     $(this).keypress(function () {
  //       $(this).removeClass('fs_input_error');
  //     });
  //   });
  //   $('#' + section_id).find('form input').each(function (index) {
  //     if ($(this).is(":focus")) {
  //       $(this).removeClass('fs_input_error');
  //     }
  //   });
  // });
  /*=========================================================================
    Scroll To Top
  =========================================================================*/
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 600) {
      $('#scroll-top').fadeIn();
    } else {
      $('#scroll-top').fadeOut();
    }
  });
  if ($('.owl-dots-1').length) {
	  $('.owl-dots-1').owlCarousel({
	    loop: true,
	    margin: 0,
	    nav: true,
	    autoplay: true,
	    autoplayTimeout: 10000,
	    dots: true,
	    responsive: {
	      0: {
	        items: 1
	      }
	    }
	  })

  }
  // if ($('.mobile-carousel').length) {
	 //  $('.mobile-carousel').owlCarousel({
	 //    loop: true,
	 //    margin: 0,
	 //    nav: true,
	 //    autoplay: true,
	 //    autoplayTimeout: 3000,
	 //    responsive: {
	 //      768: {
	 //        items: 1
	 //      },
	 //    }
	 //  })  	
  // }
  if ($('.owl-center-3').length) {
	  $('.owl-center-3').owlCarousel({
	    loop: true,
	    autoplay: true,
	    nav: true,
	    dots: false,
	    autoplayTimeout: 4000,
	    autoplaySpeed: 1000,
	    items: 3,
	    center: true,
	    margin: 35,
	    responsive: {
	      300: {
	        items: 1
	      },
	      480: {
	        items: 2
	      },
	      768: {
	        items: 3
	      },
	    }
	  });  	
  }

  if ($('.owl-center-4').length) {
	  $('.owl-center-4').owlCarousel({
	    loop: true,
	    autoplay: true,
	    nav: true,
	    dots: false,
	    autoplayTimeout: 4000,
	    items: 3,
	    center: true,
	    margin: 30,
	    responsive: {
	      300: {
	        items: 1
	      },
	      480: {
	        items: 2
	      },
	      768: {
	        items: 3
	      },
	      991: {
	        items: 4
	      },
	    }
	  });  	
  }
  $('.digit').keydown(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
  // $('.serviceBtn').click(function () {
  //   $(this).closest('.container').toggleClass('showService');
  //   $(this).toggleClass('slideInUp').toggleClass('slideInDown');
  //   $(this).find('.fa').toggleClass('fa-long-arrow-down').toggleClass('fa-long-arrow-up');
  //   $(this).closest('.height-box').find('.item:not(:first-of-type), .item:not(:nth-child(2)), .item:not(:nth-child(3)), .item:not(:nth-child(4))').slideToggle('5000');
  // });
  // $('.showMore').click(function () {
  //   $(this).closest('.sortSection').toggleClass('showAllP');
  //   $(this).toggleClass('active');
  //   if ($(this).hasClass('active')) {
  //     $(this).closest('.sortSection').find('p:not(:first-of-type)').slideDown('');
  //     $(this).html('Hide <i class="fa fa-long-arrow-left animated slideInRight infinite ml-0"></i>')
  //   } else {
  //     $(this).closest('.sortSection').find('p:not(:first-of-type)').slideUp('');
  //     $(this).html('Show <i class="fa fa-long-arrow-right animated slideInLeft infinite ml-2"></i>')
  //   }
  // });
  if ($(".useful-serice").length) {
    var swiper = new Swiper(".useful-serice", {
      spaceBetween: 30,
      effect: "fade",
      loop: !1,
      mousewheel: {
        invert: !1,
        simulateTouch: !0,
        allowTouchMove: !0,
        releaseOnEdges: !0
      },
      pagination: {
        el: ".useful-serice__pagination",
        clickable: !0
      }
    });
  }
})(jQuery);
/*=========================================================================
Home  Carousel
=========================================================================*/
function validateQty(event) {
  var key = window.event ? event.keyCode : event.which;
  if (event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39) {
    return true;
  } else if (key < 48 || key > 57) {
    return false;
  } else return true;
};