/* Declare a namespace for the site */
var Site = window.Site || {};

/* Create a closure to maintain scope of the '$'
   and remain compatible with other frameworks.  */
(function($) {
	
	//same as $(document).ready();
	$(function() {
		
		/*-------------------------------------------    
			Featured Slides
		-------------------------------------------*/
		
		
		$('.home .featured .slides ol').cycle({ 
			fx:     'fade', 
			speed:  'slow', 
			timeout: 9000,
			pause:   1,
			pager:  '.featured .paging', 
			pagerAnchorBuilder: function(idx, slide) { 
				// return selector string for existing anchor 
				return '.featured .paging li:eq(' + idx + ') a'; 
			} 
		});

		/*-------------------------------------------    
			Photo Gallery Slides
		-------------------------------------------*/

		$('.thumbnail a').click(function (e) {			
			var $t    = $(this);
			var modal = $t.parent().next();
			var css   = $t.attr('data-class');			
			var id    = '.'+css+'.'+$t.attr('ref');
						
			modal.modal({
				onShow: function(dialog) {						
					var slides = $(id);
					var children = slides.children('ul');
					
					children.cycle({
						fx: 'fade',
						timeout: 6000,
						prev: id+' .paging .previous',
						next: id+' .paging .next'
					});
				}
			});
			
			return false;
		});		

		/*-------------------------------------------    
			Terms & Conditions Popover
		-------------------------------------------*/

		$('.terms-and-conditions-details p a').click(function (e) {			
			var $t    = $(this);
			var modal = $t.parent().next();
			var css   = $t.attr('data-class');			
			var id    = '.'+css+'.'+$t.attr('ref');
						
			modal.modal({
				onShow: function(dialog) {						
					var slides = $(id);
					var children = slides.children('ul');
					
					children.cycle({
						fx: 'fade',
						timeout: 6000,
						prev: id+' .paging .previous',
						next: id+' .paging .next'
					});
				}
			});
			
			return false;
		});		

		/*-------------------------------------------    
			Equal Height Columns
		-------------------------------------------*/

		function equalHeight(group) {
			tallest = 0;
			group.each(function() {
			thisHeight = $(this).height();
				if(thisHeight > tallest) {
				tallest = thisHeight;
				}
			});
			group.height(tallest);
		}
		 
		equalHeight($(".secondary div"));						   

		/*-------------------------------------------    
			Weather
		-------------------------------------------*/
			
		$.simpleWeather({
			zipcode: '46030',
			unit: 'f',
			success: function(weather) {
				html = '<p class="city">'+weather.city+', '+weather.region+'</p>';
				html += '<a href="'+weather.link+'" rel="external"><img src="/-/media/weather/'+weather.code+'.png"></a>';
				html += '<p class="current-temperature"><a href="'+weather.link+'" rel="external">'+weather.temp+'&deg; '+weather.units.temp+'</a></p>';
				
				$(".temperature").html(html);
			},
			error: function(error) {
				$(".temperature").html('<p>'+error+'</p>');
			}
		});
			
		/*-------------------------------------------    
			Newsletter Toggle
		-------------------------------------------*/

		$(".summary").hide();
	
		$(".brief").click(function(){
			$(this).toggleClass("active").next().slideToggle("fast");
		});

		/*-------------------------------------------    
			Custom Select Element
		-------------------------------------------*/

		$("#create").click( function() {
			$("SELECT").selectBox();
		});
		
		$("#destroy").click( function() {
			$("SELECT").selectBox('destroy');
		});
		
		$("#enable").click( function() {
			$("SELECT").selectBox('enable');
		});
		
		$("SELECT")
			.selectBox()
			.focus( function() {
				$("#console").append('Focus on ' + $(this).attr('name') + '<br />');
				$("#console")[0].scrollTop = $("#console")[0].scrollHeight;
			})
			.blur( function() {
				$("#console").append('Blur on ' + $(this).attr('name') + '<br />');
				$("#console")[0].scrollTop = $("#console")[0].scrollHeight;
			})
			.change( function() {
				$("#console").append('Change on ' + $(this).attr('name') + ': ' + $(this).val() + '<br />');
				$("#console")[0].scrollTop = $("#console")[0].scrollHeight;
			});

		/*-------------------------------------------    
			Smooth Scrolling
		-------------------------------------------*/
		
			$('a[href*=#]').click(function() {
				try	{
						var duration=1000;
						var easing='swing';
						var newHash=this.hash;
						var target=$(this.hash).offset().top;
						var oldLocation=window.location.href.replace(window.location.hash, '');
						var newLocation=this;
							// make sure it's the same location
							if(oldLocation+newHash==newLocation)
							{
							// animate to target and set the hash to the window.location after the animation
							$('html:not(:animated),body:not(:animated)').animate({ scrollTop: target }, duration, easing, function() {
							// add new hash to the browser location
							window.location.href=newLocation;
						});
						return false;
						}
				} catch(e) {}
			});
	});


	$(window).bind("load", function() {
		
		
	
	});
	
})(jQuery);