jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
	var $hamburger = $(".hamburger");
	var $nav = $(".main-navigation");

	 	$hamburger.on("click", function(e) {
	  	$hamburger.toggleClass("is-active");
    	$nav.slideToggle();
  });

} );


