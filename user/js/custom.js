	(function($) {
		"use strict";
	// Page Preloader
	$(window).load(function() {
		$(".loader").delay(300).fadeOut();
		$(".animationload").delay(600).fadeOut("slow");
	});
	
	// Header Aff
		$(".header").affix({
			offset: {
				top: 100, 
				bottom: function () {
				return (this.bottom = $('.copyright').outerHeight(true))
				}
			}
		})

// Parallax
	$(window).bind('body', function() {
		parallaxInit();
	});
	function parallaxInit() {
		$('#one-parallax').parallax("30%", 0.1);
		$('#two-parallax').parallax("30%", 0.1);
		$('#three-parallax').parallax("30%", 0.1);
		$('#four-parallax').parallax("30%", 0.4);
		$('#five-parallax').parallax("30%", 0.4);
		$('#six-parallax').parallax("30%", 0.4);
		$('#seven-parallax').parallax("30%", 0.4);
	}

		$('#custom_tab a, #another_tab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})

	$('.buddy_tooltip').popover({
		container: '.buddy_carousel, .buddy_members'
	});
	

// Fun Facts
	function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 1; /* Where 50 is increment */
		
		$this.html(++current);
			if(current > $this.data('count')){
				$this.html($this.data('count'));
			} else {    
				setTimeout(function(){count($this)}, 50);
			}
		}        
		
		$(".stat-count").each(function() {
		  $(this).data('count', parseInt($(this).html(), 10));
		  $(this).html('0');
		  count($(this));
	});
	
	// DM Top
		jQuery(window).scroll(function(){
			if (jQuery(this).scrollTop() > 1) {
				jQuery('.dmtop').css({bottom:"25px"});
			} else {
				jQuery('.dmtop').css({bottom:"-100px"});
			}
		});
		jQuery('.dmtop').click(function(){
			jQuery('html, body').animate({scrollTop: '0px'}, 800);
			return false;
		});
		
	// TOOLTIP
		$('.social-icons, .topbar_social').tooltip({
		  selector: "[data-toggle=tooltip]",
		  container: "body"
		})


		// Accordion Toggle Items
		   var iconOpen = 'fa fa-minus',
				iconClose = 'fa fa-plus';
		
			$(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
				var $target = $(e.target)
				  $target.siblings('.accordion-heading')
				  .find('em').toggleClass(iconOpen + ' ' + iconClose);
				  if(e.type == 'show')
					  $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
				  if(e.type == 'hide')
					  $(this).find('.accordion-toggle').not($target).removeClass('active');
			});
			
	})(jQuery);