(function($) {
	$(document).ready(function() {
		//http://css-tricks.com/preventing-widows-in-post-titles/
		$("h1 a").each(function() {
		  var wordArray = $(this).text().split(" ");
		  if (wordArray.length > 1) {
			wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
			wordArray.pop();
			$(this).html(wordArray.join(" "));
		  }
		});

		var height = $(window).height();
		var small_height = $('#heading h1').height();

		if($('body').hasClass('home') != 0) {
			$('#heading').css('height', height);
		}
			
		$(window).scroll(function() {
			if($('body').hasClass('home') != 0) {

				if($(document).scrollTop() >= 70) {
				
					$('.subheading').slideUp();
					$('#heading, .header_wrapper').addClass('tiny');
					$('#heading').css('height', small_height);
					$('.wrapper').addClass('push');
				}
				else {
					$('#heading, .header_wrapper').removeClass('tiny');
					//$('nav').removeClass('static');
					$('.wrapper').removeClass('push');
					$('.subheading').slideDown();
					$('#heading').css('height', height);
				}
			}

			//console.log($('nav').scrollTop());
		});
			
		//http://css-tricks.com/snippets/jquery/simple-jquery-accordion/
		var allPanels = $('.accordion > ul').hide();
    
			$('.accordion > dt > h3').click(function() {
				allPanels.slideUp();
				
				if($(this).parent().next().css("display") == "none") {
					$(this).parent().next().slideDown();
				}
				
				return false;
			});
		});
})(jQuery);