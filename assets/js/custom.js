(function($) {

	"use strict";

	$(document).on('click','.btn-mobile',function(e) {
		$('.menu-item-has-children').find('ul').hide();
	});

	$(document).on("click","#topMain li", function (event) {
		var clickedBtnID = $(this).attr('id');
		//$('#'+clickedBtnID).find('ul').show();
		$('#'+clickedBtnID).find('ul').toggle();
		
	});

})(jQuery);
