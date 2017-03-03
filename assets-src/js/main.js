$(function() {
    console.log( "ready!" );
});

$('#test').click(function(){
	alert('Javascript and jQuery are working');
});

// Register keyboard events
$(document).keydown(function(e) {
	if (e.keyCode === 37) {
	   // Previous
	   $(".carousel-control.left").click();
	   return false;
	}
	if (e.keyCode === 39) {
	   // Next
	   $(".carousel-control.right").click();
	   return false;
	}
	if (e.keyCode === 27 ) {
		 // ESC
		 $("#img-back").click();
		 return false;
	}
});

$(document).ready(function(){
      $("img").bind("contextmenu",function(e){
        return false;
      });
    });

























// $(window).load(function() {
//   $('.flexslider').flexslider({
//   	slideshow: false,
//   	controlNav: false
//   });  	
// });

// (function() {
 
//   // store the slider in a local variable
//   var $window = $(window),
//       flexslider = { vars:{} };
 
//   // tiny helper function to add breakpoints
//   function getGridSize() {
//     return (window.innerWidth < 600) ? 2 :
//            (window.innerWidth < 900) ? 3 : 4;
//   }
 
//   $(function() {
//     SyntaxHighlighter.all();
//   });
 
//   $window.load(function() {
//     $('.flexslider').flexslider({
//       animation: "slide",
//       animationLoop: false,
//       itemWidth: 210,
//       itemMargin: 5,
//       minItems: getGridSize(), // use function to pull in initial value
//       maxItems: getGridSize() // use function to pull in initial value
//     });
//   });
 
//   // check grid size on resize event
//   $window.resize(function() {
//     var gridSize = getGridSize();
 
//     flexslider.vars.minItems = gridSize;
//     flexslider.vars.maxItems = gridSize;
//   });
// }());