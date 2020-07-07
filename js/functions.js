jQuery(document).ready(function(){
	"use strict";
	
	/* ---------------------------------------------------------------------- */
	/*	flexslider start
	/* ---------------------------------------------------------------------- */
	if($('.flexslider').length){
		jQuery('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  jQuery('body').removeClass('loading');
			}
		});
	}
	
	if($('.bxslider7').length){
		$('.bxslider7').bxSlider({
			 auto: true,
	 		 autoControls: true
		});
	} 
	/* ---------------------------------------------------------------------- */
	/*	Counter Functions
	/* ---------------------------------------------------------------------- */
	if(jQuery('.word-count').length){
		jQuery(".word-count").counterUp({
			delay: 10,
			time: 1000
		});
	}
	
	
	/* ---------------------------------------------------------------------- */
	/*	BxSlider start
	/* ---------------------------------------------------------------------- */
	if($('.bxslider').length){
		$('.bxslider').bxSlider({
		   mode: 'fade',
		   pagerCustom: '#bx-pager'
		});
	}
	
	if($('.top_slider_bxslider').length){
		$('.top_slider_bxslider').bxSlider({
		   auto:true,
		    pagerCustom: '#bx-pager'
		});
	}

    /* ---------------------------------------------------------------------- */
	/*	audio video script 
	/* ---------------------------------------------------------------------- */
	if($('audio,video').length){
		jQuery('audio,video').mediaelementplayer({});
	}

    /* ---------------------------------------------------------------------- */
	/*	Countdown start
	/* ---------------------------------------------------------------------- */
	if($('#kodeCountdown').length){
		var austDay = new Date();
		austDay = new Date(2016, 6-1, 5,12,10);
		jQuery('#kodeCountdown').countdown({until: austDay});
		jQuery('#year').text(austDay.getFullYear());
	}
	if($('.countdown').length){
		$('.countdown').downCount({ date: '08/08/2016 12:00:00', offset: +1 });
	}
    /* ---------------------------------------------------------------------- */
	/*	Click to Top 
	/* ---------------------------------------------------------------------- */
    if($('#kode-topbtn').length){
		$('#kode-topbtn').on("click",function() {		
			jQuery('html, body').animate({scrollTop : 0},800);
			return false;
		});
	}
	/*
    ==============================================================
       PrettyPhoto Script Start
    ============================================================== 
    */

	if($("a[data-rel^='prettyPhoto']").length){
		$("a[data-rel^='prettyPhoto']").prettyPhoto();
	}

	/*
    ==============================================================
      slick slider Script Start
    ============================================================== 
    */
	if($('.spb-center').length){
		$('.spb-center').slick({
			centerMode: true,
			centerPadding: '0px',
			slidesToShow: 3,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '0px',
						slidesToShow: 3
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '0px',
						slidesToShow: 1
					}
				}
			]
		});
	}


	if($('.slider-for').length){
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			asNavFor: '.slider-nav'
		});
	}

	if($('.slider-nav').length){
		$('.slider-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 3,
			asNavFor: '.slider-for',
			dots: true,
			centerMode: true,
			focusOnSelect: true,
			autoplay: false,
		});
	}

	/* ---------------------------------------------------------------------- */
	/*	owl carousel script
	/* ---------------------------------------------------------------------- */
	if($('.owl-carousel-3').length){
		jQuery('.owl-carousel-3').owlCarousel({
			margin:0,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				},
				1600:{
					items:3
				}
			}
		});
	}
	
	/* ---------------------------------------------------------------------- */
	/*	slick slider script
	/* ---------------------------------------------------------------------- */
	if($('.kode-related-slide').length){
		$('.kode-related-slide').slick({
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		});
	}
	
	/* ---------------------------------------------------------------------- */
	/*	slick slider script
	/* ---------------------------------------------------------------------- */
	if($('.kode-flicker-slide').length){
		$('.kode-flicker-slide').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  dots:true,
		});
	}
	
	/* ---------------------------------------------------------------------- */
	/*	slick slider script
	/* ---------------------------------------------------------------------- */
	if($('.kode-ftb-slid').length){
		$('.kode-ftb-slid').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  dots:true,
		});
	}
	/* ---------------------------------------------------------------------- */
	/*	slick slider script
	/* ---------------------------------------------------------------------- */
	if($('.kode-ply-list').length){
		$('.kode-ply-list').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplaySpeed: 2000,
		  autoplay: true,
		});
	}
});	

   /* =======================================================================
           spinner Script Script
     =======================================================================
  */  
	if($('#spinner').length){
		$( "#spinner" ).spinner()
	}
	if($('#spinner2').length){
	   $( "#spinner2" ).spinner()
	}
	if($('#spinner1').length){
	   $( "#spinner1" ).spinner()
	}
/*
    ==============================================================
       Map Script Start
    ============================================================== */
	if($('#map-canvas').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}
	
	function initialize() {
		var MY_MAPTYPE_ID = 'custom_style';
		var map;
		var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
		var featureOpts = [
		    {
	        "featureType": "road",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "lightness": 100
	            },
	            {
	                "visibility": "simplified"
	            }
	        ]
	    },
	    {
	        "featureType": "water",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#d6e9b9"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#d6e9b9"
	            }
	        ]
	    },
	    {
	        "featureType": "road",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#fbe7a4"
	            }
	        ]
	    }
		];	

		var mapOptions = {
			zoom: 13,
			scrollwheel: false,
			center: brooklyn,
			mapTypeControlOptions: {
			  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID
		};


		map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

		var styledMapOptions = {
			name: 'Custom Style'
		};

		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		var marker=new google.maps.Marker({
		  position:brooklyn,
		  });

		marker.setMap(map);
	}

	/* ---------------------------------------------------------------------- */
	/*	slick slider start 
	/* ---------------------------------------------------------------------- */
	if($('.kode-ply-slid').length){
		$('.kode-ply-slid').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
		});
	}
	
	/* ---------------------------------------------------------------------- */
	/*	countdown start 
	/* ---------------------------------------------------------------------- */
	if($('.countdown').length){
		if($('.countdown').length){
			$('.countdown').downCount({ date: '08/08/2017 12:00:00', offset: +1 });
		  }
	}
	/* ---------------------------------------------------------------------- */
	/*	search start 
	/* ---------------------------------------------------------------------- */
	if($('#ftb_btn_link').length){
		$("#ftb_btn_link").click(function(){
			$("#show-class").toggle(300)
			
			
		});
	}
	/* ---------------------------------------------------------------------- */
	/*	DL Responsive Menu
	/* ---------------------------------------------------------------------- */
	if(typeof($.fn.dlmenu) == 'function'){
		$('#kode-responsive-navigation').each(function(){
			$(this).find('.dl-submenu').each(function(){
				if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
					var parent_nav = $('<li class="menu-item kode-parent-menu"></li>');
					parent_nav.append($(this).siblings('a').clone());
					
					$(this).prepend(parent_nav);
				}
			});
			$(this).dlmenu();
		});
	}
	/*
	==============================================================
		Masonry  Script Start
	==============================================================
	*/
	// Initialize Masonry

    if ($('.masonry').length) {
        var container = document.querySelector('.masonry');
        var msnry = new Masonry(container, {
            itemSelector: '.masonry-item'
        });

        msnry.on('layoutComplete', function() {

            mr_firstSectionHeight = $('.main-container section:nth-of-type(1)').outerHeight(true);

            // Fix floating project filters to bottom of projects container

            if ($('.filters.floating').length) {
                setupFloatingProjectFilters();
                updateFloatingFilters();
                window.addEventListener("scroll", updateFloatingFilters, false);
            }

            $('.masonry').addClass('fadeIn');
            $('.masonry-loader').addClass('fadeOut');
            if ($('.masonryFlyIn').length) {
               
            }
        });

        msnry.layout();
    }

	if($('.countdown').length){
		$('.countdown').downCount({ date: '08/08/2016 12:00:00', offset: +1 });
	}
	
	
	
	$('#myTabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
	
	
	if($('#calendar').length){

		$('#calendar').fullCalendar({
			defaultDate: '2016-09-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-09-01'
				},
				{
					title: 'Long Event',
					start: '2016-09-07',
					end: '2016-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-09-11',
					end: '2016-09-13'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T10:30:00',
					end: '2016-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-09-28'
				}
			]
		});
	}
	$(document).ready(function () {
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			$('#calendar').fullCalendar('render');
		});
		$('#profileone a:first').tab('show');
	});

	if($('.bxslider').length){
		$('.bxslider').bxSlider({
		  pagerCustom: '#bx-pager'
		});
	}
	
	
	
	