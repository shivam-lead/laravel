(function(){
	if (document.cookie.indexOf('device_pixel_ratio') == -1
		&& 'devicePixelRatio' in window
		&& window.devicePixelRatio == 2){
		
		var date = new Date();
		date.setTime(date.getTime() + 3600000);
		
		document.cookie = 'device_pixel_ratio=' + window.devicePixelRatio + ';' +  ' expires=' + date.toUTCString() +'; path=/';
		//if cookies are not blocked, reload the page
		if(document.cookie.indexOf('device_pixel_ratio') != -1) {
			window.location.reload();
		}
	}
})();
	
// Gradient animation, header
var granimInstance = new Granim({
	element: '.header-bg',
	name: 'basic-gradient',
	direction: 'left-right', // 'diagonal', 'top-bottom', 'radial'
	opacity: [1, 1],
	stateTransitionSpeed: 100,
	isPausedWhenNotInView: false,
	states : {
		"default-state": {
			gradients: [
				['#C23760', '#C23760'],
				['#555A8B', '#C23760'],
				['#7C4374', '#C23760'],
				['#8B9E9C', '#555A8B'],
				['#D7822B', '#555A8B'],
				['#8E98BF', '#555A8B'],
				['#1F97D1', '#7C4374'],
				['#C23760', '#7C4374'],
				['#555A8B', '#7C4374'],
				['#7C4374', '#8B9E9C'],
				['#8B9E9C', '#8B9E9C'],
				['#D7822B', '#8B9E9C'],
				['#8E98BF', '#D7822B'],
				['#1F97D1', '#D7822B'],
				['#C23760', '#D7822B'],
				['#555A8B', '#8E98BF'],
				['#7C4374', '#8E98BF'],
				['#8B9E9C', '#8E98BF'],
				['#D7822B', '#1F97D1'],
				['#8E98BF', '#1F97D1'],
				['#1F97D1', '#1F97D1']
			]
		}
	}
});
var granimInstance2 = new Granim({
	element: '.footer-bg',
	name: 'basic-gradient',
	direction: 'left-right', // 'diagonal', 'top-bottom', 'radial'
	opacity: [1, 1],
	stateTransitionSpeed: 100,
	isPausedWhenNotInView: false,
	states : {
		"default-state": {
			gradients: [
				['#C23760', '#C23760'],
				['#555A8B', '#C23760'],
				['#7C4374', '#C23760'],
				['#8B9E9C', '#555A8B'],
				['#D7822B', '#555A8B'],
				['#8E98BF', '#555A8B'],
				['#1F97D1', '#7C4374'],
				['#C23760', '#7C4374'],
				['#555A8B', '#7C4374'],
				['#7C4374', '#8B9E9C'],
				['#8B9E9C', '#8B9E9C'],
				['#D7822B', '#8B9E9C'],
				['#8E98BF', '#D7822B'],
				['#1F97D1', '#D7822B'],
				['#C23760', '#D7822B'],
				['#555A8B', '#8E98BF'],
				['#7C4374', '#8E98BF'],
				['#8B9E9C', '#8E98BF'],
				['#D7822B', '#1F97D1'],
				['#8E98BF', '#1F97D1'],
				['#1F97D1', '#1F97D1']
			]
		}
	}
});

/*var html_element_id, html_element_2_id, html_element_3_id, html_element_5_id;
var CaptchaCallback = function(){
	if ( $('#RecaptchaField1').length ) {
	html_element_id = grecaptcha.render('RecaptchaField1', {
		'sitekey' : '6Le3K3wUAAAAAKiTck6RQS89Hm_SUHbFFaoZz0S0'
	});
	}
	if ( $('#RecaptchaField2').length ) {
	html_element_2_id = grecaptcha.render('RecaptchaField2', {
		'sitekey' : '6Le3K3wUAAAAAKiTck6RQS89Hm_SUHbFFaoZz0S0'
	});
	}
	if ( $('#RecaptchaField3').length ) {
	html_element_3_id = grecaptcha.render('RecaptchaField3', {
		'sitekey' : '6Le3K3wUAAAAAKiTck6RQS89Hm_SUHbFFaoZz0S0'
	});
	}
	if ( $('#RecaptchaField5').length ) {
	html_element_5_id = grecaptcha.render('RecaptchaField5', {
		'sitekey' : '6Le3K3wUAAAAAKiTck6RQS89Hm_SUHbFFaoZz0S0'
	});
	}
};*/

var captchaArray = new Array();
var CaptchaCallback = function(){
	$('.recaptcha').each(function(){
		var id = $(this).attr('id');
		captchaArray[id] = grecaptcha.render(id, {
			'sitekey' : '6Le3K3wUAAAAAKiTck6RQS89Hm_SUHbFFaoZz0S0'
		});
	});
};


$(window).on('load', function(){
	
	// this function takes an url and deremines wether it is an absolute path or not
	function isAbsolute(url) {
		if (url.indexOf("//") === 0 || url.indexOf("mailto:") === 0 || url.indexOf("tel:") === 0 || url.indexOf("sms:") === 0 || /^[a-z]+:\/\//i.test(url)){
			return 1;
		}
		return 0;
	}
	
	$('.page').find('a').each(function() {
		var href = this.getAttribute('href');    // get the raw href attribute value
		if (href != null){
			if(isAbsolute(href)) {                   // if the href is of an absolute path
			} else {
				if (href.charAt(0) == "/") href = href.substr(1);
				$(this).attr('href', baseurl + href);
			}
		}
	});
	
	
	// Initial sizes
	var twentyfive = $('.main-img').width();
	var twentyfivehome = $('.fakeitem25').width();
	//$('.image-right').css({'width':twentyfive+'px'});
	$('.overview').css({'height':twentyfive+'px'});
	$('.nbanner').css({'height':twentyfivehome+'px'});
	
	// Standard grid setup.
	$('.standard-grid-container-desc').each(function(i, gridContainer){
		var $grid = $(this).find('.standard-grid');
		$grid.isotope({
			itemSelector: '.item',
			layoutMode: 'packery',
			packery: {
				gutter: 0
			},
			getSortData: {
				morder: '.morder parseInt'
			},
			sortBy: 'morder',
			sortAscending: false
		});
		// Click filters
		$('.filter-list a, .mobile-filter-overlay a').not('.notfilter, .close-filter-menu').click(function(e){
			e.preventDefault();
			var id = $(this).attr('rel');
			if (id != '*'){
				$grid.isotope({ filter: '.filter'+id });
			} else {
				$grid.isotope({ filter: '*' });
			}
			$([document.documentElement, document.body]).animate({
				scrollTop: $(".standard-grid-container-desc").offset().top - 160
			}, 500);
			$('.filter-list a, .mobile-filter-overlay a').removeClass('on');
			$(this).addClass('on');
			$('.mobile-filter-overlay').slideUp(500);
		});
	});
	// Standard grid setup reverse order.
	$('.standard-grid-container').each(function(i, gridContainer){
		var $grid = $(this).find('.standard-grid');
		$grid.isotope({
			itemSelector: '.item',
			layoutMode: 'packery',
			packery: {
				gutter: 0
			},
			getSortData: {
				morder: '.morder parseInt'
			},
			sortBy: 'morder',
			sortAscending: true
		});
		// Click filters
		$('.filter-list a, .mobile-filter-overlay a').not('.notfilter, .close-filter-menu').click(function(e){
			e.preventDefault();
			var id = $(this).attr('rel');
			if (id != '*'){
				$grid.isotope({ filter: '.filter'+id });
			} else {
				$grid.isotope({ filter: '*' });
			}
			$([document.documentElement, document.body]).animate({
				scrollTop: $(".standard-grid-container").offset().top - 160
			}, 500);
			$('.filter-list a, .mobile-filter-overlay a').removeClass('on');
			$(this).addClass('on');
			$('.mobile-filter-overlay').slideUp(500);
		});
	});
	// Standard grid setup reverse order.
	$('.standard-grid-container-rel').each(function(i, gridContainer){
		var $grid = $(this).find('.standard-grid-rel');
		$grid.isotope({
			itemSelector: '.item',
			layoutMode: 'packery',
			packery: {
				gutter: 0
			},
			getSortData: {
				morder: '.morder parseInt'
			},
			sortBy: 'morder',
			sortAscending: true
		});
	});
	
	// Fix for Chrome 1px extra issue.
	setTimeout(function(){
		$('.standard-grid-container').each(function(i, gridContainer){
			$(this).find('.standard-grid').isotope('layout');
		});
		$('.standard-grid-container-desc').each(function(i, gridContainer){
			$(this).find('.standard-grid').isotope('layout');
		});
		$('.standard-grid-container-rel').each(function(i, gridContainer){
			$(this).find('.standard-grid-rel').isotope('layout');
		});
	}, 1500);
	
	$('.left-column').stickySidebar({
		topSpacing: 80,
		bottomSpacing: 60,
		resizeSensor: true
	});
	
	$('.grid').animate({'opacity':1}, 1);
	setTimeout(function(){
		$('.grid').css({'opacity':1});
	}, 100);
	
	//$('.loading-overlay').delay(1).fadeOut(150);
	
	// 1px line fix
	if ($('.items-per-row-3').length){
		$('.items-per-row-3').css({'width':'100%'});
		if ($('body').width() > 1000 && $('body').width() < 1048 ){
			var width = $('.items-per-row-3').outerWidth();
			if (width % 3 == 0){
				// Do nothing as it fits
				//console.log('is div');
			} else {
				//console.log('is not div');
				var itemWidth = $('.item').outerWidth();
				if (itemWidth < 300){
					var itemWidthAdj = Math.floor(itemWidth);
					var gridWidth = itemWidthAdj * 3 - 3;
					$('.items-per-row-3').css({'width':gridWidth+'px'});
				}
			}
		}
	}
	
	
	
	
	
	
	//LinkedIn Tracking Code for https://www.buzzacott.co.uk/
	/*_linkedin_partner_id = "558156";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
	
	_linkedin_partner_id = "528468";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();*/

});

// Custom form submit
	var onSubmit = function(token) {
		console.log('success!');
		$('.new-form').submit();
	};


var scrollOptions = {
	slidesPerView: 'auto',
	grabCursor: true,
	freeMode: true,
	mousewheel: {
		forceToAxis: true,
		invert: true
	},
	scrollbar: {
		el: '.swiper-scrollbar',
		hide: false,
		draggable: true
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
}
var swiperSearch = new Swiper('.swiper-horizontal-search', scrollOptions);

$(document).ready(function(){
	
	$('.darkmode-toggle').click(function(e){
		e.preventDefault();
		$('body').toggleClass('darkmode');
		if ($('body').hasClass('darkmode')){
			setCookie('darkmode', '1', 365);
		} else {
			setCookie('darkmode', '0', 365);
		}
		
	});
	
	$('a[href^="#"]').click(function(e){
		e.preventDefault();
		var bid = $(this).attr('href');
		bid = bid.split('#')[1];
		//alert(bid);
		$([document.documentElement, document.body]).animate({
			scrollTop: $('#'+bid).offset().top - 160
		}, 500);
	});

	$('.block table').each(function(){
		$(this).wrap('<div class="table-scroll-area"><div class="table-scroll-panel"></div></div>');
	});
	
	
	$('.grid').css({'visibility':'visible', 'opacity':0});
	
	// Filter Dropdown
	if ($('.mobile-filter-overlay').length){
		$('.mobfiltertoggle').css({'display':'inline-block'});
	}
	$('.mobfiltertoggle').click(function(e){
		e.preventDefault();
		$('.mobile-filter-overlay').slideDown(500);
	});
	
	$('.tooltip').tooltipster({
		theme: 'tooltipster-borderless',
		maxWidth: 250,
		animation: 'fade',
		contentCloning: true,
		animationDuration: 100,
		interactive: false,
		trigger: 'custom',
		triggerOpen: {
			mouseenter: true,
			touchstart: true
		},
		triggerClose: {
			click: true,
			//scroll: true,
			mouseleave: true,
			tap: true
		}
	});
	
	// Close filter dropdown
	$('.close-filter-menu').click(function(e){
		e.preventDefault();
		$('.mobile-filter-overlay').stop(true, true).slideUp(500);
	});
	
	
	
	
	// Video youtube popup
	$('.popup-youtube').magnificPopup({
		disableOn: 0,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
	
	$('.inplace-youtube').click(function(e){
		e.preventDefault();
		$(this).hide();
		$(this).parent().find('.hidden-youtube').show();
		$(this).parent().find('iframe')[0].src += '&autoplay=1';
	});
	
	// Cookie popup
	$('#cookiepopup').modal({
		escapeClose: false,
		clickClose: false,
		showClose: false
	});
	$('.modal .submit').click(function(e){
		e.preventDefault();
		$.modal.close();
		$.ajax({
			url: 'assets/ajax/cookie.php',
			type: 'POST',
			data: {},
			timeout: 9000,
			error: function(){},
			success: function(){}
		});
	});
	
	// Staff stories
	$('.ss-title').click(function(e){
		e.preventDefault();
		if ($(this).hasClass('open')){
			$(this).removeClass('open');
			$(this).parent().parent().parent().find('.ss-up').hide();
			$(this).parent().parent().parent().find('.ss-down').show();
			$(this).parent().parent().parent().find('.ss-text').stop(true,false).slideUp(300);
		} else {
			$(this).parent().parent().parent().find('.ss-up').hide();
			$(this).parent().parent().parent().find('.ss-down').show();
			$(this).parent().parent().parent().find('.ss-text').stop(true,false).slideUp(300);
			$(this).parent().parent().parent().find('.ss-title.open').removeClass('open');
			$(this).addClass('open');
			$(this).find('.ss-down').hide();
			$(this).find('.ss-up').show();
			$(this).parent().parent().find('.ss-text').stop(true,false).slideDown(300);
		}
	});
	// Open first one by default
	/*$('.staff-story').first().find('.ss-down').hide();
	$('.staff-story').first().find('.ss-up').show();
	$('.staff-story').first().find('.ss-title').addClass('open');
	$('.staff-story').first().find('.ss-text').show();*/
	
	// Remember the sector clicked
	$('.home-top-grid .item').click(function(e){
		e.preventDefault();
		var cat = $(this).attr('rel');
		var href = $(this).attr('href');
		$.ajax({
			url: 'assets/ajax/cookie_remember.php',
			type: 'POST',
			data: {'cat':cat},
			timeout: 9000,
			error: function(){},
			success: function(){}
		});
		setTimeout(function(){
			window.location.href = href;
		}, 500);
	});
	
	// Forget the sector clicked
	$('.resetheader').click(function(e){
		e.preventDefault();
		$.ajax({
			url: 'assets/ajax/cookie_remember.php',
			type: 'POST',
			data: {'cat':4},
			timeout: 9000,
			error: function(){},
			success: function(){}
		});
		setTimeout(function(){
			location.reload();
		}, 500);
	});
	
	// Gallery slider
	var swiper = new Swiper('.gallery', {
		pagination: {
			el: '.swiper-pagination',
		}
	});
	var swiper2 = new Swiper('.gallery-loop', {
		pagination: {
			el: '.swiper-pagination',
			clickable: true
		},
		autoplay: {
			delay: 7000,
		},
		loop: true
	});
	
	// Checkboxes and radio buttons
	$(':checkbox, :radio').checkradios();
	
	// Datepicker
	$('.datepicker-here').datepicker({
		format: 'dd/mm/yyyy',
		autoHide: true
	});
	
	// Responsive video players
	fluidvids.init({
		selector: ['iframe', 'object'], // runs querySelectorAll()
		players: ['www.youtube.com','www.youtube-nocookie.com','player.vimeo.com'] // players to support
	});
	
	
	// Grid filter drop down CFT
	$('.filter-drop-area .label').click(function(e){
		e.preventDefault();
		var id = $(this).parent().attr('id');
		$('.filter-drop-area.open').not('#'+id).removeClass('open');
		$(this).parent().toggleClass('open');
	});
	$('.filter-group span').click(function(e){
		e.preventDefault();
		var checkBox = $(this).parent().find('.checkradios-checkbox').click();
	});
	
	$('.filter-drop-area input').change(function(){
		var id = $(this).val();
		var status = $(this).prop('checked');
		var grid = $(this).parents('.filter-drop-area').attr('rel');
		$.ajax({
			url: 'assets/ajax/jobs.php',
			type: 'POST',
			dataType: 'json',
			data: {'action':'update-grid-filter', 'filter_id':id, 'filter_status':status, 'grid_id':grid},
			timeout: 9000,
			error: function(){
				// Connection has timed out
			},
			success: function(json){
				// Update grid with function that's also triggered on load
				loadGridPrefs(grid);
				//grid_reload();
			}
		});
	});
	
	if ($('.filter-drop-area').length){
		var grid_id = $('.filter-drop-area').attr('rel');
		loadGridPrefs(grid_id);
	}
	
	$('.clear-filters').click(function(e){
		e.preventDefault();
		var grid = $(this).attr('rel');
		$.ajax({
			url: 'assets/ajax/jobs.php',
			type: 'POST',
			dataType: 'json',
			data: {'action':'update-grid-filter', 'filter_id':'clear', 'filter_status':'', 'grid_id':grid},
			timeout: 9000,
			error: function(){
				// Connection has timed out
			},
			success: function(json){
				// Update grid with function that's also triggered on load
				$('.filter-drop-area input:checkbox').removeAttr('checked');
				$('.checkradios-checkbox').removeClass('checked').removeClass('icon-checkradios-checkmark').addClass('unchecked');
				loadGridPrefs(grid);
			}
		});
	});
	
	// Text only grid item hover animation.
	$('.item.textonly').mouseenter(function(){
		$(this).find('.grad1').stop(true, true).animate({'opacity':0}, 500);
	}).mouseleave(function(){
		$(this).find('.grad1').stop(true, true).animate({'opacity':1}, 500);
	});
	
	// Image grid item hover animation.
	$('.item.imagefirst').mouseenter(function(){
		$(this).find('.overlay').stop(true, true).animate({'opacity':1}, 500);
	}).mouseleave(function(){
		$(this).find('.overlay').stop(true, true).animate({'opacity':0}, 500);
	});
	
	// News grid item hover animation.
	$('.item.news').mouseenter(function(){
		$(this).find('.grad1').stop(true, true).animate({'opacity':0}, 500);
	}).mouseleave(function(){
		$(this).find('.grad1').stop(true, true).animate({'opacity':1}, 500);
	});
	
	// Open side menu.
	$('.menu-icon').click(function(e){
		e.preventDefault();
		$('#sidemenu-bg, #sidemenu-wrap').show();
		$('html, body').css({'overflow':'hidden', 'height':'100%', 'position':'relative'});
		$('#sidemenu .sidemenuinner').stop(true, true).animate({'right':'0%'}, 500);
		setTimeout(function(){
			$('.sidebarsf').focus();
		}, 500);
	});
	
	// Close side menu.
	$('.close-menu, #sidemenu-bg').click(function(e){
		e.preventDefault();
		$('#sidemenu .sidemenuinner').stop(true, true).animate({'right':'-100%'}, 500, function(){
			$('#sidemenu-bg, #sidemenu-wrap').hide();
			//$('body').css({'overflow':'auto'});
			$('html, body').css({'overflow':'auto', 'height':'auto', 'position':'relative'});
		});
	});
	
	// Submenu open
	var sidemenudroprel = 0;
	$('#sidemenu .menu .dropmenu').click(function(e){
		e.preventDefault();
		var rel = $(this).attr('rel');
		$('.submenu').stop(true, true).slideUp(500);
		if (sidemenudroprel != rel){
			$('.submenu-'+rel).stop(true, true).slideDown(500);
			sidemenudroprel = rel;
		} else {
			sidemenudroprel = 0;
		}
	});
	
	// Custom scrollbars
	$('.scrolling').mCustomScrollbar({
		theme:"minimal-dark"
	});
	
	// Cookie scrollbar area
	$('.cookie-scroll-area').mCustomScrollbar({
		theme:"dark-3"
	});
	
	// Back to top
	$('.backtotop').click(function(e){
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '500');
	});
	
	// Related page links
	$('.goto_hidden').each(function(){
		var text = $(this).text();
		var link = $(this).attr('rel');
		$('#relatedpagelinks').append('<ul class="filter-list"><li><a class="goto" rel="'+link+'">'+text+'</a></li></ul>');
	});
	
	$('.goto_hidden').each(function(){
		var text = $(this).text();
		var link = $(this).attr('rel');
		$('#relatedpagelinksnew').append('<div><a class="goto" rel="'+link+'">'+text+'</a></div>');
	});
	// If nothing to link to remove the heading of the section
	if ($('#relatedpagelinksnew').text() == ''){
		$('#relatedpagelinksnew').parent().remove();
	}
	
	// On 404 load, auto move to search
	$('.four04sf').focus();
	
	
	// Set up map for menu
	/*if ($('.googlemap').length){
		$('.googlemap').gmap3({
			marker:{
				latLng:['51.514531', '-0.094785'],
				//latLng:['22.282269', '114.155288'],
				options:{icon: "assets/imgs/map-marker.png"}
			},
			map:{
				options:{
					styles: [
						{ stylers: [
							{ "hue": "#a800ff" },
							{ "saturation": -73 },
							{ "lightness": -1 }
						] }
					],
					zoom: 16,
					scrollwheel:false,
					mapTypeControl: false,
					scaleControl: false,
					zoomControl: true,
					disableDefaultUI: true,
					draggable: false
				}
			}
		});
	}*/
	
	// Temp search thing
	/*$('.search-area .search-field').focus(function(){
		$('.search-results.sidebarsr').slideDown(500);
	});*/
	
	
	
	// Mega Search
	var orderArray = {person1:".mss-group1", person2:".mss-group2", person3:".mss-group3", person4:".mss-group4", person5:".mss-group5", pages:".mss-group6", news:".mss-group7", events:".mss-group8", people:".mss-group9"};
	$('.header .search-icon').click(function(e){
		e.preventDefault();
		$('html').addClass('megasearchopen');
		$('#megasearch').fadeIn(500, function(){
			$('#ms-search-input').focus();
		});
		// Mobile menu
		/*$('#mobile-menu').removeClass('active');
		$('.pushmenu-push').removeClass('pushmenu-push-toright');
		$('.pushmenu-left').removeClass('pushmenu-open');
		$('#search-results-mobile').hide();
		$('.pushmenu > .scroll-area').show();*/
		//$('.pushmenu .search-input').stop(true, true).animate({'opacity':0, 'width':'0px'}, 500);
		$('.pm-close-btn').hide();
		$('.pm-search-btn').show();
	});
	// Close mega search
	$('.megasearch-close').click(function(e){
		e.preventDefault();
		$('html').removeClass('megasearchopen');
		$('#megasearch').fadeOut(500);
		$('.top-results, .no-results, .all-results').hide();
		$('#ms-search-input').val('');
		$('#megasearch .all-results, #megasearch .megasearch-back').hide();
		$('#megasearch .top-results, #megasearch .search-elements').show()
	});
	// Search key press
	var currentCount = 0;
	var currentLength = 0;
	var twoletterwords = ["hr", "it", "us", "fe", "uk", "fs", "hk", "cf", "dd"];
	var searchip = $('#search-ip').val();
	var searchbrowser = $('#search-browser').val();
	var d = new Date();
	var searchid = d.getTime();
	
	$('#ms-search-input').on('keyup click input focus', function(){
		var twolettermatch = twoletterwords.indexOf(this.value.toLowerCase());		
		if (this.value.length >= 3 || twolettermatch > -1){
			//console.log(this.value);
			$('.ms-term').empty().append(this.value);
			$.ajax({
				url: 'assets/ajax/search-results-new.php',
				type: 'POST',
				dataType: 'json',
				data: {'searchterm':this.value,'ip':searchip,'browser':searchbrowser,'searchid':searchid},
				timeout: 9000,
				error: function(){},
				success: function(json){
					var cdnpath = $('#cdnpath').val();
					$('.no-results').fadeOut(400);
					$('.top-results').show();
					$('.ms-category-menu a').show();
					var totalcount = json['pages'].length + json['events'].length + json['news'].length + json['people'].length;
					$('.ms-totalcount').empty().append('<span class="ms-total-person1">'+json['person1'].length+'</span><span class="ms-total-person2">'+json['person2'].length+'</span><span class="ms-total-person3">'+json['person3'].length+'</span><span class="ms-total-person4">'+json['person4'].length+'</span><span class="ms-total-person5">'+json['person5'].length+'</span><span class="ms-total-pages">'+json['pages'].length+'</span><span class="ms-total-events">'+json['events'].length+'</span><span class="ms-total-news">'+json['news'].length+'</span><span class="ms-total-people">'+json['people'].length+'</span>');
					
					if (json['events'].length){
						var viewmore = '';
						if (json['events'].length > 5){
							currentLength = 5;
							$(orderArray.events).empty().append('<div class="shs-title">Events</div>');
							viewmore = '<a href="events" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['events'].length;
							$(orderArray.events).empty().append('<div class="shs-title">Events</div>');
						}
						$(orderArray.events).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-event-img.jpg';
							if (json['events'][i].type){desc = json['events'][i].type;}
							if (json['events'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['events'][i].img;
							}
							$(orderArray.events).append('<a href="'+json['events'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['events'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.events+'-results').empty();
						for (var i=0;i<json['events'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-event-img.jpg';
							if (json['events'][i].type){desc = json['events'][i].type;}
							if (json['events'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['events'][i].img;
							}
							$(orderArray.events+'-results').append('<a href="'+json['events'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['events'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.events).append(viewmore);
					} else {
						$(orderArray.events).hide();
						$(orderArray.events+'-title').hide();
					}
				

					
					if (json['pages'].length){
						var viewmore = '';
						if (json['pages'].length > 5){
							currentLength = 5;
							$(orderArray.pages).empty().append('<div class="shs-title">Pages</div>');
							viewmore = '<a href="pages" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['pages'].length;
							$(orderArray.pages).empty().append('<div class="shs-title">Pages</div>');
						}
						$(orderArray.pages).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-page-img.jpg';
							if (json['pages'][i].type){desc = json['pages'][i].type;}
							if (json['pages'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['pages'][i].img;
							}
							$(orderArray.pages).append('<a href="'+json['pages'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['pages'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.pages+'-results').empty();
						for (var i=0;i<json['pages'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-page-img.jpg';
							if (json['pages'][i].type){desc = json['pages'][i].type;}
							if (json['pages'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['pages'][i].img;
							}
							$(orderArray.pages+'-results').append('<a href="'+json['pages'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['pages'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.pages).append(viewmore);
					} else {
						$(orderArray.pages).hide();
						$(orderArray.pages+'-title').hide();
					}
					
					
					if (json['news'].length){
						var viewmore = '';
						if (json['news'].length > 5){
							currentLength = 5;
							$(orderArray.news).empty().append('<div class="shs-title">News & Insights</div>');
							viewmore = '<a href="news" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['news'].length;
							$(orderArray.news).empty().append('<div class="shs-title">News & Insights</div>');
						}
						$(orderArray.news).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-news-img.jpg';
							if (json['news'][i].type){desc = json['news'][i].type;}
							if (json['news'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['news'][i].img;
							}
							$(orderArray.news).append('<a href="'+json['news'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['news'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.news+'-results').empty();
						for (var i=0;i<json['news'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-news-img.jpg';
							if (json['news'][i].type){desc = json['news'][i].type;}
							if (json['news'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['news'][i].img;
							}
							$(orderArray.news+'-results').append('<a href="'+json['news'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['news'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.news).append(viewmore);
					} else {
						$(orderArray.news).hide();
						$(orderArray.news+'-title').hide();
					}
					
					
					if (json['people'].length){
						var viewmore = '';
						if (json['people'].length > 5){
							currentLength = 5;
							$(orderArray.people).empty().append('<div class="shs-title">Our people</div>');
							viewmore = '<a href="people" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['people'].length;
							$(orderArray.people).empty().append('<div class="shs-title">Our people</div>');
						}
						$(orderArray.people).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-person-img.jpg';
							if (json['people'][i].type){desc = json['people'][i].type;}
							if (json['people'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['people'][i].img;
							}
							$(orderArray.people).append('<a href="'+json['people'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['people'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.people+'-results').empty();
						for (var i=0;i<json['people'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-person-img.jpg';
							if (json['people'][i].type){desc = json['people'][i].type;}
							if (json['people'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['people'][i].img;
							}
							$(orderArray.people+'-results').append('<a href="'+json['people'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['people'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.people).append(viewmore);
					} else {
						$(orderArray.people).hide();
						$(orderArray.people+'-title').hide();
					}
					
					
					
					if (json['person1'].length){
						var viewmore = '';
						$(orderArray.person1+'-title').empty().append(json['person1'][0].title);
						if (json['person1'].length > 5){
							currentLength = 5;
							$(orderArray.person1).empty().append('<div class="shs-title">'+json['person1'][0].title+'</div>');
							viewmore = '<a href="person1" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['person1'].length;
							$(orderArray.person1).empty().append('<div class="shs-title">'+json['person1'][0].title+'</div>');
						}
						$(orderArray.person1).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-'+json['person1'][i].imgtype+'-img.jpg';
							if (json['person1'][i].type){desc = json['person1'][i].type;}
							if (json['person1'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['person1'][i].img;
							}
							$(orderArray.person1).append('<a href="'+json['person1'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person1'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person1+'-results').empty();
						for (var i=0;i<json['person1'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-'+json['person1'][i].imgtype+'-img.jpg';
							if (json['person1'][i].type){desc = json['person1'][i].type;}
							if (json['person1'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['person1'][i].img;
							}
							$(orderArray.person1+'-results').append('<a href="'+json['person1'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person1'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person1).append(viewmore);
					} else {
						$(orderArray.person1).hide();
						$(orderArray.person1+'-title').hide();
					}
					
					
					if (json['person2'].length){
						var viewmore = '';
						$(orderArray.person2+'-title').empty().append(json['person2'][0].title);
						if (json['person2'].length > 5){
							currentLength = 5;
							$(orderArray.person2).empty().append('<div class="shs-title">'+json['person2'][0].title+'</div>');
							viewmore = '<a href="person2" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['person2'].length;
							$(orderArray.person2).empty().append('<div class="shs-title">'+json['person2'][0].title+'</div>');
						}
						$(orderArray.person2).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-'+json['person2'][i].imgtype+'-img.jpg';
							if (json['person2'][i].type){desc = json['person2'][i].type;}
							if (json['person2'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['person2'][i].img;
							}
							$(orderArray.person2).append('<a href="'+json['person2'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person2'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person2+'-results').empty();
						for (var i=0;i<json['person2'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-'+json['person2'][i].imgtype+'-img.jpg';
							if (json['person2'][i].type){desc = json['person2'][i].type;}
							if (json['person2'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['person2'][i].img;
							}
							$(orderArray.person2+'-results').append('<a href="'+json['person2'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person2'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person2).append(viewmore);
					} else {
						$(orderArray.person2).hide();
						$(orderArray.person2+'-title').hide();
					}
					
					
					if (json['person3'].length){
						var viewmore = '';
						$(orderArray.person3+'-title').empty().append(json['person3'][0].title);
						if (json['person3'].length > 5){
							currentLength = 5;
							$(orderArray.person3).empty().append('<div class="shs-title">'+json['person3'][0].title+'</div>');
							viewmore = '<a href="person3" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['person3'].length;
							$(orderArray.person3).empty().append('<div class="shs-title">'+json['person3'][0].title+'</div>');
						}
						$(orderArray.person3).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-'+json['person3'][i].imgtype+'-img.jpg';
							if (json['person3'][i].type){desc = json['person3'][i].type;}
							if (json['person3'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['person3'][i].img;
							}
							$(orderArray.person3).append('<a href="'+json['person3'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person3'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person3+'-results').empty();
						for (var i=0;i<json['person3'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-'+json['person3'][i].imgtype+'-img.jpg';
							if (json['person3'][i].type){desc = json['person3'][i].type;}
							if (json['person3'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['person3'][i].img;
							}
							$(orderArray.person3+'-results').append('<a href="'+json['person3'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person3'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person3).append(viewmore);
					} else {
						$(orderArray.person3).hide();
						$(orderArray.person3+'-title').hide();
					}
					
					
					if (json['person4'].length){
						var viewmore = '';
						$(orderArray.person4+'-title').empty().append(json['person4'][0].title);
						if (json['person4'].length > 5){
							currentLength = 5;
							$(orderArray.person4).empty().append('<div class="shs-title">'+json['person4'][0].title+'</div>');
							viewmore = '<a href="person4" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['person4'].length;
							$(orderArray.person4).empty().append('<div class="shs-title">'+json['person4'][0].title+'</div>');
						}
						$(orderArray.person4).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-'+json['person4'][i].imgtype+'-img.jpg';
							if (json['person4'][i].type){desc = json['person4'][i].type;}
							if (json['person4'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['person4'][i].img;
							}
							$(orderArray.person4).append('<a href="'+json['person4'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person4'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person4+'-results').empty();
						for (var i=0;i<json['person4'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-'+json['person4'][i].imgtype+'-img.jpg';
							if (json['person4'][i].type){desc = json['person4'][i].type;}
							if (json['person4'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['person4'][i].img;
							}
							$(orderArray.person4+'-results').append('<a href="'+json['person4'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person4'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person4).append(viewmore);
					} else {
						$(orderArray.person4).hide();
						$(orderArray.person4+'-title').hide();
					}
					
					
					if (json['person5'].length){
						var viewmore = '';
						$(orderArray.person5+'-title').empty().append(json['person5'][0].title);
						if (json['person5'].length > 5){
							currentLength = 5;
							$(orderArray.person5).empty().append('<div class="shs-title">'+json['person5'][0].title+'</div>');
							viewmore = '<a href="person5" class="shs-viewall">View more</a>';
						} else {
							currentLength = json['person5'].length;
							$(orderArray.person5).empty().append('<div class="shs-title">'+json['person5'][0].title+'</div>');
						}
						$(orderArray.person5).show();
						for (var i=0;i<currentLength;++i){
							var desc = '';
							var img = 'assets/imgs/search-'+json['person5'][i].imgtype+'-img.jpg';
							if (json['person5'][i].type){desc = json['person5'][i].type;}
							if (json['person5'][i].img){
								img = cdnpath+'w_186/h_186/crop/q_80/'+json['person5'][i].img;
							}
							$(orderArray.person5).append('<a href="'+json['person5'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+img+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person5'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person5+'-results').empty();
						for (var i=0;i<json['person5'].length;++i){
							var desc = '';
							var largeimg = 'assets/imgs/search-'+json['person5'][i].imgtype+'-img.jpg';
							if (json['person5'][i].type){desc = json['person5'][i].type;}
							if (json['person5'][i].img){
								largeimg = cdnpath+'w_400/h_400/crop/q_80/'+json['person5'][i].img;
							}
							$(orderArray.person5+'-results').append('<a href="'+json['person5'][i].url+'" class="shs-result"><span class="shsr-img"><img src="'+largeimg+'" alt=""/></span><span class="shsr-right"><span class="shsr-title">'+json['person5'][i].title+'</span><span class="shsr-desc">'+desc+'</span></span><span class="clear"></span></a>');
						}
						$(orderArray.person5).append(viewmore);
					} else {
						$(orderArray.person5).hide();
						$(orderArray.person5+'-title').hide();
					}




					if (!json['pages'].length && !json['events'].length && !json['news'].length && !json['people'].length){
						//target.append('<h4>No results found.</h4>');
						$('.top-results, .all-results').hide();
						$('.no-results').stop(true, false).fadeIn(400);
					}
					swiperSearch.update();
					
					// todo move this to it's own function
					megaSearchInitCB();
					

					
				}
			});
		} else {
			$('.top-results, .no-results, .all-results').hide();
		}
	});
	
	function megaSearchInitCB(){
		$(orderArray.events+'-title').empty().append('Events');
		$(orderArray.pages+'-title').empty().append('Pages');
		$(orderArray.news+'-title').empty().append('News & Insights');
		$(orderArray.people+'-title').empty().append('Our people');
		
	
		$('.shs-viewall').click(function(e){
			e.preventDefault();
			var resultType = $(this).attr('href');
			$('.ms-category-menu .on').removeClass('on');
			$(orderArray[resultType]+'-title').addClass('on');
			$('.results-list').hide();
			$('.ms-totalcount span').hide();
			$('.ms-totalcount span.ms-total-'+resultType).show();
			$(orderArray[resultType]+'-results').show();
			$('#megasearch .top-results, #megasearch .search-elements').fadeOut(500, function(){
				$('#megasearch .all-results, #megasearch .megasearch-back').fadeIn(500);
				document.body.scrollTop = 0; // For Safari
				document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
				$("#megasearch").animate({ scrollTop: 0 }, 100);
				
			});
		});
		
		$('.megasearch-back').click(function(e){
			e.preventDefault();
			$('#megasearch .all-results, #megasearch .megasearch-back').fadeOut(500, function(){
				$('#megasearch .top-results, #megasearch .search-elements').fadeIn(500);
			});
		});
		
		$('.shs-result').click(function(e){
			e.preventDefault();
			var href = $(this).attr('href');
			$.ajax({
				url: 'assets/ajax/search-result-select.php',
				type: 'POST',
				dataType: 'json',
				data: {'searchid':searchid,'href':href},
				timeout: 9000,
				error: function(){window.location.href = href;},
				success: function(){window.location.href = href;}
			});
		});
	}
	
	$('.ms-category-menu a').click(function(e){
		e.preventDefault();
		var rel = $(this).attr('rel');
		var text = $(this).text();
		if (text == 'Events'){var type = 'events';}
		else if (text == 'Pages'){var type = 'pages';}
		else if (text == 'News & Insights'){var type = 'news';}
		else if (text == 'Our people'){var type = 'people';}
		$('.ms-category-menu .on').removeClass('on');
		$(this).addClass('on');
		$('.ms-totalcount span').hide();
		$('.ms-totalcount span.ms-total-'+type).show();
		$('.results-list').stop(true,true).fadeOut(500);
		setTimeout(function(){
			$('.mss-group'+rel+'-results').stop(true,true).fadeIn(500);
		}, 500);
	});
	
	
	
	// Search
	var currentCount = 0;
	$('input.search-field').on('keyup click input focus', function(){
		var type = $(this).attr('rel');
		var offset = $(this).offset();
		var top = offset.top;
		var left = offset.left;
		var bottom = top + $(this).height();
		var width = $(this).outerWidth();
		
		if (type == 'sidebar'){
			var target = $('.search-results.sidebarsr');
		} else {
			var target = $('.search-results.four04sr');
		}
		
		if (this.value.length >= 2){
			target.stop(false, false).show();

			//console.log(this.value);
			$.ajax({
				url: 'assets/ajax/search-results.php',
				type: 'POST',
				dataType: 'xml',
				data: {'searchterm':this.value},
				timeout: 9000,
				error: function(){},
				success: function(xml){
					target.empty().append($('results', xml).text());
				}
			});
		} else {
			target.stop(false, false).hide();
		}
	});
	
	

	$('.new-form').submit(function(e){
		e.preventDefault();
		$(this).find('.submit').addClass('processing').val('Processing');
		var id = $(this).attr('id');
		var errorMessage = "";
		var IsFormValid = true;
		var FieldName = "";
		var lastRadioActualName = "";
		var s = $(this).serialize();
		$('.error').removeClass('error');
		$('.recaptcha-error').hide();
		
		var captchaid = $(this).find('.recaptcha').attr('id');
		if (captchaid){
			var response = grecaptcha.getResponse(captchaArray[captchaid]);
			if (response.length == 0){
				IsFormValid = false;
				$('#'+id+' .recaptcha-error').show();
			}
		}
		
		$('#'+id+' input, #'+id+' select, #'+id+' textarea').not('.ignore, .submit').each(function (){
			var fvalue = jQuery.trim($(this).val());
			var IsRequired = $(this).hasClass("required");
			// Find the type of field
			if ($(this)[0].tagName.toLowerCase() == "select"){
				fieldType = "select";
			} else if ($(this)[0].tagName.toLowerCase() == "textarea"){
				fieldType = "textarea";
			} else {
				if ($(this).attr("type")){
					fieldType = $(this).attr("type");
				} else {
					fieldType = "text";
				}
			}

			if (fieldType.toLowerCase() == "textarea"){
				if (IsRequired && fvalue == ""){
					$(this).addClass('error');
					IsFormValid = false;
				}
			}
			
			else if (fieldType.toLowerCase() == "text" || fieldType.toLowerCase() == "password" || fieldType.toLowerCase() == "hidden"){
				if (IsRequired && fvalue == ""){
					$(this).addClass('error');
					IsFormValid = false;
				}
			}
			
			else if (fieldType.toLowerCase() == "email"){
				var RegExEmail = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+)*$/;
				if (!RegExEmail.test(fvalue)){
					$(this).addClass('error');
					IsFormValid = false;
				}
			}
			
			else if (fieldType.toLowerCase() == "checkbox"){
				var IsChecked = $(this).is(":checked");
				if (IsRequired && !IsChecked){
					$(this).parent().addClass('error');
					IsFormValid = false;
				}
			}
			
			else if (fieldType.toLowerCase() == "select"){
				if (IsRequired && fvalue == ""){
					$(this).parent().addClass('error');
					IsFormValid = false;
				}
			}
			
			else if (fieldType.toLowerCase() == "radio"){
				if (lastRadioActualName != $(this).attr("name")){                        
					var selectedRadioValue = $("input[name='" + $(this).attr("name") + "']:checked").val();
					if (IsRequired){
						
						if (selectedRadioValue == null){
							$("input[name='" + $(this).attr("name") + "']").parent().addClass('error');
							IsFormValid = false;
						}
					}
					lastRadioActualName = $(this).attr("name");
				}
			}	
			
		});
		
		if (IsFormValid){
			$.ajax({
				url: 'assets/ajax/form-process.php',
				type: 'POST',
				dataType: 'xml',
				data: s,
				timeout: 9000,
				error: function(){
					// Timeout function.
					$(this).find('.submit').removeClass('processing').val('Submit');
				},
				success: function(xml){
					if ($('status', xml).text() == 'success'){
						// If a response is given from form-process.php
						window.location.href = $('redirect', xml).text();
					} else {
						if ($('type', xml).text() == 'password'){
							$('#'+id+' .errormessage').empty().append('The password you entered is incorrect.').show();
						} else if ($('type', xml).text() == 'required'){
							$('#'+id+' .errormessage').empty().append('Please complete all form fields and re-submit.').show();
						}
					}
				}
			});
		} else {
			$('#'+id+' .errormessage').empty().append('Please complete all form fields and re-submit.').show();
			$(this).find('.submit').removeClass('processing').val('Submit');
		}
	});
	
	
	// Campaign Master form submit
	$('.ppc-form').submit(function(e){
		e.preventDefault();
		var FieldName = "";
		var FieldValue = "";
		var IsFormValid = true;
		var AccessCode = $('#accesscode').val();
		var EmailAddress = "";
		var errorMessage = "";
		var lastRadioActualName = "";
		$('.error').removeClass('error');
		
		$(".ppc-form input, .ppc-form select, .ppc-form textarea").not('.ignore, .submit').each(function (){
			var fieldType = "";
			var fvalue = jQuery.trim($(this).val());
			var IsRequired = $(this).hasClass("required");
			
			if ($(this)[0].tagName.toLowerCase() == "select"){
				fieldType = "select";
			} else if ($(this)[0].tagName.toLowerCase() == "textarea"){
				fieldType = "textarea";
			} else {
				if ($(this).attr("type")){
					fieldType = $(this).attr("type");
				} else {
					fieldType = "text";
				}
			}
			
			if (fieldType.toLowerCase() == "textarea"){
				if (IsRequired && fvalue == ""){
					$(this).addClass('error');
					IsFormValid = false;
				} else {
					FieldValue += fvalue.replace(/,/g, " ").replace(/\"/g, "") + "~";
					FieldName += $(this).attr("name") + "~";
				}
			}
			else if (fieldType.toLowerCase() == "text" || fieldType.toLowerCase() == "password" || fieldType.toLowerCase() == "hidden"){
				if (IsRequired && fvalue == ""){
					$(this).addClass('error');
					IsFormValid = false;
				} else {
					FieldValue += fvalue.replace(/,/g, " ").replace(/\"/g, "") + "~";
					FieldName += $(this).attr("name") + "~";
				}
			}
			else if (fieldType.toLowerCase() == "email"){
				EmailAddress = fvalue;
				var RegExEmail = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+)*$/;
				if (!RegExEmail.test(fvalue)){
					$(this).addClass('error');
					IsFormValid = false;
				} else {
					FieldValue += fvalue.replace(/,/g, " ").replace(/\"/g, "") + "~";
					FieldName += $(this).attr("name") + "~";
				}
			}
			else if (fieldType.toLowerCase() == "radio"){
				if (lastRadioActualName != $(this).attr("name")){                        
					var selectedRadioValue = $("input[name='" + $(this).attr("name") + "']:checked").val();
					if (IsRequired){
						if (selectedRadioValue == null){
							$(this).parent().addClass('error');
							IsFormValid = false;
						} else {
							FieldName += $(this).attr("name") + "~";
							FieldValue += selectedRadioValue + "~";
						}
					} else {
						FieldName += $(this).attr("name") + "~";
						FieldValue += selectedRadioValue + "~";
					}
					lastRadioActualName = $(this).attr("name");
				}
			}
			else if (fieldType.toLowerCase() == "checkbox"){
				var IsChecked = $(this).is(":checked");
				if (IsRequired && !IsChecked){
					$(this).parent().addClass('error');
					IsFormValid = false;
				} else {
					if (IsChecked){
						FieldValue += "Yes~";
					} else {
						FieldValue += "No~";
					}
					FieldName += $(this).attr("name") + "~";
				}
			}
			else if (fieldType.toLowerCase() == "select"){
				if (IsRequired && fvalue == ""){
					$(this).parent().addClass('error');
					IsFormValid = false;
				} else {
					FieldValue += fvalue.replace(/,/g, " ") + "~";
					FieldName += $(this).attr("name") + "~";
				}
			}

			
			
		});
			
		if (IsFormValid == true) {              
			var url = "https://login.cmadvantage.co.uk/externalformsubmission/ExternalResourceService.asmx";
			$.ajax({
				type: "POST",
				url: url + "/DataCaptureSubmitData",
				data: JSON.stringify({EmailAddress: EmailAddress, FieldName: FieldName, FieldValue: FieldValue, AccessCode: AccessCode}),
				//crossDomain: true,
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: OnSuccessCall,
				error: OnErrorCall
			});
		} else {
			$('.errormessage').addClass('error');
		}
	});
	
	function OnSuccessCall(response) {
		if (response.d.indexOf("ERROR") > -1) {
			$('.errormessage').append('<p>'+response.d+'</p>');
		} else {
			var FormID = $('#formid').val();
			var site = $('#sitehttp').val();
			var formName = $('#formname').val();
			
			gtag('event', 'forms', { event_category: 'forms', event_action: 'Submit success', event_label: formName});
			window.location.href = site+'thank-you?f='+FormID;
			/*gtag('send', {
				hitType: 'event',
				eventCategory: 'Forms',
				eventAction: 'Submit success',
				eventLabel: formName
			});*/
			
			//alert('Redirect to thank you page once built.');
		}
	}
		
	function OnErrorCall(request, error) {
		$('.errormessage').append('<p>'+request.responseText+'</p>');
	}
	
	
	
	
	
	
	
	
	
	
	// Cookies
	function setCookie(cname, cvalue, exdays){
		var d = new Date();
		d.setTime(d.getTime() + (exdays*86400000)); // 86400000 = 1 day
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	
	function eraseCookie(name) {   
		document.cookie = name+'=; Max-Age=-99999999;';
		document.cookie = name+'=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;domain=.'+window.location.hostname+';';
	}
	
	function enableGTM(){
		// Google Tag Manager
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MFKKRZ');
		
		//Hotjar Tracking Code for https://www.buzzacott.co.uk/
		(function(h,o,t,j,a,r){
		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		h._hjSettings={hjid:1091454,hjsv:6};
		a=o.getElementsByTagName('head')[0];
		r=o.createElement('script');r.async=1;
		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		
		// Moneypenny tracking
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o), m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-6268691-1', 'auto');
	}
	
	function disableGTM(){
		eraseCookie('_dc_gtm_UA-6268691-1');
		eraseCookie('_gat_gtag_UA-6268691-1');
		eraseCookie('_gid');
		eraseCookie('_ga');
		
		eraseCookie('_hjClosedSurveyInvites');
		eraseCookie('_hjDonePolls');
		eraseCookie('_hjMinimizedPolls');
		eraseCookie('_hjIncludedInSample');
		eraseCookie('_hjShownFeedbackMessage');
		eraseCookie('_hjid');
		eraseCookie('_hjRecordingLastActivity');
		eraseCookie('_hjTLDTest');
		eraseCookie('_hjUserAttributesHash');
		eraseCookie('_hjCachedUserAttributes');
		eraseCookie('_hjLocalStorageTest');
		eraseCookie('_hjIncludedInSample');
		
		eraseCookie('_gcl_au');
		eraseCookie('ads/ga-audiences');
	}
	
	function enableFacebookPixel(){
		// Marketing to set
		// Facebook pixel
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '521229768905353');
		fbq('track', 'PageView');
	}
	
	function disableFacebookPixel(){
		// Marketing to unset
		eraseCookie('_fbp');
		eraseCookie('fr');
		eraseCookie('tr');
	}
		
	// Slide in cookie bar
	//$('.cookie-header-bar').animate({'top':'0px', 'opacity':1}, 1000);
	
	// If it's the cookie page don't show
	var cururl = window.location.href;
	if (cururl.indexOf('/cookies') !== -1){
		$('.cookie-overlay').hide();
	}
	
	// Accept all
	$('.cookie-accept-button, .bottomtab2').click(function(e){
		e.preventDefault();
		setCookie('cookie_preferences', 'all', 365);
		$('.cookie-overlay').fadeOut(500);
		enableGTM();
		enableFacebookPixel();
	});
	
	// Accept with changes
	$('.bottomtab').click(function(e){
		e.preventDefault();
		if ($('#cookies-analytics').val() == 'on'){
			// Enable Google
			enableGTM();
			setCookie('cookie_preferences', 'analytics', 365);
		}
		if ($('#cookies-analytics').val() == 'off'){
			// Disable Google
			disableGTM();
		}
		if ($('#cookies-marketing').val() == 'on'){
			// Enable Facebook
			enableFacebookPixel();
			setCookie('cookie_preferences', 'marketing', 365);
		}
		if ($('#cookies-marketing').val() == 'off'){
			// Disable Facebook
			disableFacebookPixel();
		}
		if ($('#cookies-analytics').val() == 'on' && $('#cookies-marketing').val() == 'on'){
			setCookie('cookie_preferences', 'all', 365);
		}
		if ($('#cookies-analytics').val() == 'off' && $('#cookies-marketing').val() == 'off'){
			setCookie('cookie_preferences', 'none', 365);
		}
		$('.cookie-overlay').fadeOut(500);
	});
	
	// Open preference box
	$('.cookie-settings-button').click(function(e){
		e.preventDefault();
		$('.cookie-header-bar').animate({'top':'-100px', 'opacity':0}, 500);
		$('.cookie-box').fadeIn(500);
	});
	
	// Open preference box from cookie page
	$('.open-cookie-preferences').click(function(e){
		e.preventDefault();
		$('.cookie-header-bar').hide();
		$('.cookie-box').show();
		$('.cookie-overlay').fadeIn(500);
		
		$('.cookie-box .tabon').removeClass('tabon');
		$('.tab:first').addClass('tabon');
		$('.cookie-box .left-side').hide();
		$('.cookie-box .tab-content-1').stop(true, true).show();
	});
	
	// Prefernce box desktop tabs
	$('.cookie-box .right-side .tab').click(function(e){
		e.preventDefault();
		var rel = $(this).attr('rel');
		$('.cookie-box .tabon').removeClass('tabon');
		$('.cookie-box .tab'+rel).addClass('tabon');
		$('.cookie-box .left-side').fadeOut(500);
		$('.cookie-box .tab-content-'+rel).stop(true, true).delay(250).fadeIn(500);
	});
	
	// Prefernce box mobile tabs
	$('.cookie-box .mobile-tabs .tab').click(function(e){
		e.preventDefault();
		var rel = $(this).attr('rel');
		$('.cookie-box .tabon').removeClass('tabon');
		$('.cookie-box .tab'+rel).addClass('tabon');
		$('.cookie-box .left-side').fadeOut(500);
		$('.cookie-box .tab-content-'+rel).stop(true, true).delay(250).fadeIn(500);
	});

	
	// Toggle swtiches
	$('.toggle-switch').click(function(e){
		e.preventDefault();
		if ($(this).parent().hasClass('inactive')){
			$(this).parent().removeClass('inactive').addClass('active');
			$(this).parent().find('.toggle-label').empty().append('Active');
			$(this).parent().find('input').val('on');
		} else if ($(this).parent().hasClass('active')){
			$(this).parent().removeClass('active').addClass('inactive');
			$(this).parent().find('.toggle-label').empty().append('Inactive');
			$(this).parent().find('input').val('off');
		}
	});
	
	
});

// Goto links
$(document).on('click','.goto', function(e){ 
	e.preventDefault();
	var id = $(this).attr('rel');
	$([document.documentElement, document.body]).animate({
		scrollTop: $("#goto"+id).offset().top - 160
	}, 500);
});

// Analytic clicks
/*$(document).on('click','a', function(e){
	var thishref = $(this).attr('href');
	
	if (thishref.indexOf('mailto:') != -1){
		gtag('event', 'click', { event_category: 'click', event_action: 'Email link', event_label: thishref});
	}
	else if (thishref.indexOf('tel:') != -1){
		gtag('event', 'click', { event_category: 'click', event_action: 'Phone link', event_label: thishref});
	}
	else if (thishref.indexOf('https://twitter.com/Buzzacott') != -1){
		gtag('event', 'click', { event_category: 'click', event_action: 'Twitter link', event_label: thishref});
	}
	else if (thishref.indexOf('https://www.linkedin.com/company/buzzacott') != -1){
		gtag('event', 'click', { event_category: 'click', event_action: 'LinkedIn link', event_label: thishref});
	}
	else if (thishref.indexOf('.pdf') != -1){
		gtag('event', 'click', { event_category: 'PDF', event_action: thishref, event_label: window.location.href});
	}
	if ($(this).parent().hasClass('sidebarsr')){
		e.preventDefault();
		var searchText = $('.sidebarsf').val();
		gtag('event', 'search', { event_category: 'search', event_action: 'Search term', event_label: searchText});
		setTimeout(function(){
			window.location.href = baseurl+thishref;
		}, 500);
	}
	else if ($(this).parent().hasClass('four04sr')){
		e.preventDefault();
		var searchText = $('.four04sf').val();
		gtag('event', 'click', { event_category: 'search', event_action: 'Search term', event_label: searchText});
		setTimeout(function(){
			window.location.href = baseurl+thishref;
		}, 500);
	}
});*/



// Resize links
$(window).on('resize', function(){
	var twentyfive = $('.main-img').width();
	var twentyfivehome = $('.fakeitem25').width();
	//$('.image-right').css({'width':twentyfive+'px'});
	$('.overview').css({'height':twentyfive+'px'});
	$('.nbannerarea .nbanner').css({'height':twentyfivehome+'px'});
	//$('html, body').stop(true,true).animate({ scrollTop: 0 }, '0');
	
	if ($('.items-per-row-3').length){
		$('.items-per-row-3').css({'width':'100%'});
		if ($('body').width() > 1000 && $('body').width() < 1048 ){
			var width = $('.items-per-row-3').outerWidth();
			if (width % 3 == 0){
				// Do nothing as it fits
				//console.log('is div');
			} else {
				//console.log('is not div');
				var itemWidth = $('.item').outerWidth();
				if (itemWidth < 300){
					var itemWidthAdj = Math.floor(itemWidth);
					var gridWidth = itemWidthAdj * 3 - 3;
					$('.items-per-row-3').css({'width':gridWidth+'px'});
				}
			}
		}
	}
	
});



document.addEventListener('input', function (event) {
	if (event.target.tagName.toLowerCase() !== 'textarea') return;
	autoExpand(event.target);
}, false);

var autoExpand = function (field) {
	
	// Reset field height
	field.style.height = 'inherit';
	
	// Get the computed styles for the element
	var computed = window.getComputedStyle(field);
	
	// Calculate the height
	var height = parseInt(computed.getPropertyValue('border-top-width'), 10)
	+ parseInt(computed.getPropertyValue('padding-top'), 10)
	+ field.scrollHeight
	+ parseInt(computed.getPropertyValue('padding-bottom'), 10)
	+ parseInt(computed.getPropertyValue('border-bottom-width'), 10);
	
	field.style.height = height + 'px';

};

function loadGridPrefs(grid){
	$.ajax({
		url: 'assets/ajax/jobs.php',
		type: 'POST',
		dataType: 'json',
		data: {'action':'get-grid-options', 'grid_id':grid},
		timeout: 9000,
		error: function(){
			// Connection has timed out
		},
		success: function(json){
			// Update grid with function that's also triggered on load
			$('.ttsicon, .ttstext').hide();
			$(json.filters).show();
		}
	});
	
}
