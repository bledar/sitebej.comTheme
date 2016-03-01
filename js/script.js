$().ready(function(){
	console.log("done");
	  $(".owl-carousel").owlCarousel({
		 items : 4, //10 items above 1000px browser width
		 itemsDesktop : [1000,4], //5 items between 1000px and 901px
		 itemsDesktopSmall : [900,3], // betweem 900px and 601px
		 itemsTablet: [600,2], //2 items between 600 and 0
		 itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
		 autoPlay: 3000,
		 stopOnHover:true
	 });
	 (function() {
    "use strict";
    var toggles = document.querySelectorAll(".c-hamburger");
    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };
    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
	   $(".menu").slideToggle();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      });
    }
  })();
});
