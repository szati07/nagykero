jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
	var $hamburger = $(".hamburger");
	
	 	$hamburger.on("click", function(e) {
	  	$hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
  });
} );

