/**
* HTML5 History API
*
* Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
*
* Built on top of the jQuery library
* http://jquery.com
*
*
* @author Pedro Rogerio
* @version 1.0.1
*/
var History = {
	run: function() {
		if(History.detectSupport()){
			this.content($('.nav a'));
			this.pop();
		}
	},
	detectSupport: function() {
		return !!(window.history && history.pushState);
    	},
	content: function(el) {
		el.on('click', function(e){
			e.preventDefault();
			var url = $(this).attr('href');

			$('.placeholder').html('<div class="loading" />');
			
			el.parent().removeClass('active');
			$(this).parent().addClass('active')
			
			History.ajax(url);
			history.pushState(null, document.title, url);
		});
	},
	pop: function() {
		window.onpopstate = function() {
			var url		  = location.pathname,
				pathArray = url.split('/');
			
			History.ajax(url);

			$('.nav li').removeClass('active');
			if(pathArray[2] == ''){
				$('.nav li:first').addClass('active');
			}else {
				$('a[href="'+pathArray[2]+'"]').parent().addClass('active');
			}
		}
	},
	ajax: function(url) {
		$.ajax({
			url: url,
			type: "GET",
			dataType: "html",
			success: function(res) {
				$('.placeholder').remove('.loading');
				$('.placeholder').html($(res).find('.placeholder').html());
				document.title = $(res).filter("title").text();
			}
		});
	}
}

$(function() {
	History.run();
});
