//get all elements with class and get the biggest box
function get_biggest(elements){
	var biggest_height = 0;
	for ( var i = 0; i < elements.length ; i++ ){
		var element_height = $(elements[i]).outerHeight();
		//compare the height, if bigger, assign to variable
		if(element_height > biggest_height ) biggest_height = element_height;
	}
	return biggest_height;
}

function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	// STICKY FOOTER
	var headerHeight = $('header').outerHeight();
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1;
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});

	// for vertically middle content
	$('.bp-middle').each(function() {
		var bpMiddleHeight = $(this).outerHeight() / 2 * - 1;
		$(this).css({marginTop: bpMiddleHeight});
	});

	// for equalizer
	$('.classname').css({minHeight: 0});
	var ClassName = get_biggest($('.classname'));
	$('.classname').css({minHeight: ClassName});
}

$(window).resize(function() {
	resize();
});

$(document).ready(function() {
	if (Modernizr.touch) {
		$('html').addClass('bp-touch');
	}

	resize();

	//scroll to
	$('.contact-sec').click(function(event){
		var id = $(this).attr('href');
		var top = $(id).offset().top;

		event.preventDefault();

		$('html, body').animate({
				scrollTop: top
		})
	});


	// Detect objectFit support for IE
	if('objectFit' in document.documentElement.style === false) {
		$('.l-n-b-img, .n-p-b-img').each(function(){
			var imgAttrSource = $(this).find('img').attr('src');
			$(this).addClass('object-fit').css({'background-image' : 'url('+ imgAttrSource +')'});
		});
	};

	//equalize heights
	var gridItems = $('.l-n-box .l-n-b-content');
	var maxHeight = 0;

	function findTallest() {
			var height = $(this).outerHeight();
			if (height > maxHeight) {
					maxHeight = height;
			}
	};
	gridItems.each(findTallest).height(maxHeight-60);

	//owl slider
	$('.owl-slider-container .owl-carousel').owlCarousel({
			// margin: 10,
			loop: true,
			items: 4,
			dots: true,
			// stagePadding: 50,
			autoplay: true,
			autoplayTimeout:6000,
			stopOnHover : true,
			autoplaySpeed: 1000,
			nav:true,
			navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
			responsiveClass:true,
			responsive:{
				0:{ items:2 },
				480:{ items:2 },
				640:{ items:3 },
				810:{ items:3 },
				1024:{ items:1 }
			},
	});
});

$(window).on('load', function() {
	resize();
});

// preloader once done
Pace.on('done', function() {
	// totally hide the preloader especially for IE
	setTimeout(function() {
		$('.pace-inactive').hide();
	}, 500);
});
