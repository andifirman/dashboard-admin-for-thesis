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



// Fungsi untuk menentukan max-length dari deskripsi yang akan ditampilkan pada show course (materi)

function truncateText(selector, maxLength) {
  var element = document.querySelector(selector),
    truncated = element.innerText;

  if (truncated.length > maxLength) {
    truncated = truncated.substr(0, maxLength) + '...';
  }
  return truncated;
}

// Ini untuk max-length pada show
document.querySelector('p.file-content-show').innerText = truncateText('p.file-content-show', 350);
// Ini untuk max-length pada index
document.querySelector('p.file-content-index').innerText = truncateText('p.file-content-index', 200);


// Text on Hover pada halaman show course detail
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});