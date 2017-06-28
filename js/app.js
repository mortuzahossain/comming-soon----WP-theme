/*
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
 */
(function ($) {

$(function(){
	'use strict';

	var options ={
		wrapper: ".wrapper",
		minHeight: 500
	};

	function setHeight(){
		var documentHeight = $(window).height();

		if(documentHeight > options.minHeight){
			$(options.wrapper).height(documentHeight);
		}
	}

	setHeight();

	$(window).resize(function(){
		setHeight();
	})
	
	$('#mc-form').ajaxChimp();

});

   })(jQuery)