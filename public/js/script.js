(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);



// Fungsi untuk menentukan max-length dari deskripsi yang akan ditampilkan pada show course (materi) BYCLASS
// function truncateText(selector, maxLength) {
//   var element = document.querySelector(selector);
//   var truncated = element.innerText;

//   console.log(element);
//   if (truncated.length > maxLength) {
//     truncated = truncated.substring(0, maxLength) + '...';
//   }

//   return truncated;
// }


// document.querySelector('p.content-index').innerText = truncateText('p.content-index', 135);



// document.getElementById('content-show').innerHTML = truncateTextById('content-show', 350);
// // document.querySelector('.content-show').innerText = truncateText('.content-show', 350);





// Text on Hover pada halaman show course detail
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});