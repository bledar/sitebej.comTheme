$().ready(function(){
	console.log("done");
	  $(".owl-carousel").owlCarousel({
		 items : 4, //10 items above 1000px browser width
		 itemsDesktop : [1000,4], //5 items between 1000px and 901px
		 itemsDesktopSmall : [900,3], // betweem 900px and 601px
		 itemsTablet: [600,2], //2 items between 600 and 0
		 itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
		 autoplay:true,
		 autoplayTimeout:3000,
		 autoplayHoverPause:true,
		 loop:true
	 });
});
