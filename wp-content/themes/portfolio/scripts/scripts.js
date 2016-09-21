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
			
		$(window).scroll(function() {
			if($(document).scrollTop() >= 70) {
				
				$('.subheading').slideUp(400, 
					function(){
						$('nav').addClass('static');
				$('#heading').addClass('tiny');
				$('.projects').addClass('push');
					});
			}
			else {
				$('#heading').removeClass('tiny');
				$('nav').removeClass('static');
				$('.projects').removeClass('push');
					$('.subheading').slideDown();
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