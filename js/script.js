$(document).ready(function(e){
	$('.current-open').click(function(){
		$('.dropdown').toggleClass('open');
	});

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
});