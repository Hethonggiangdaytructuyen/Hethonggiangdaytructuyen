$(document).ready(function(e){
  // Account dropdown
	$('.current-open').click(function(){
		$('.dropdown').toggleClass('open');
	});
  // End Account dropdown

  // Collapsed-box
  // News
  $('.news-tools').click(function(){
    $('.box-news').toggleClass('collapsed-box');
    $('.icon-news').toggleClass('fa-minus');
    $('.icon-news').toggleClass('fa-plus');
  });

  // Fanpage
  $('.fan-tools').click(function(){
    $('.box-fanpage').toggleClass('collapsed-box');
    $('.icon-fanpage').toggleClass('fa-minus');
    $('.icon-fanpage').toggleClass('fa-plus');
  });
  // End Collapsed-box

  // Carousel
	var owl = $("#owl-demo");
  	owl.owlCarousel({
      	itemsCustom : [
        	[0, 2],
        	[450, 2],
        	[600, 2],
        	[700, 3],
        	[1000, 4],
        	[1200, 5],
        	[1400, 5],
        	[1600, 5]
      	],
      	navigation : false,
      	pagination: false
  });

  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  // End Carousel

  // Back to top
  if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
    backToTop = function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $('#back-to-top').addClass('show');
      }
      else{
        $('#back-to-top').removeClass('show');
      }
    };
    backToTop();
    $(window).on('scroll', function () {
      backToTop();
    });
    $('#back-to-top').on('click', function (e) {
      e.preventDefault(); // Prevent the link above from following the URL
      $('html,body').animate({
          scrollTop: 0
      }, 700);
    });
  }
  // End Back to top

  // Fixed Navbar
  var TopFixMenu  = $("#fixNav");
    $(window).scroll(function(){
      if($(this).scrollTop()<200){
        TopFixMenu.hide();
      }else{
        TopFixMenu.show();
        TopFixMenu.css({'position' :'fixed','top':'0','left':'0','z-index':'10000','width':'100%'});
      }
    });
});