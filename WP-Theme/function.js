jQuery(document).ready(function(){
	jQuery('header nav .main-nav ul li').hover(function(){
		jQuery('.mega-menu').hide();
	});
	jQuery('.shop').hover(function(){
		//jQuery('.mega-menu').hide();
		jQuery('.mega-menu.shop').show();
	});
	jQuery('.mega-menu').hover(function(){},function(){
		jQuery(this).hide();
	});
	jQuery('.mega-menu ul li').each(function(){
		var origURL = jQuery(this).find('a').attr('href');
		var origText = jQuery(this).text();
		jQuery(this).empty().append('<a href="'+origURL+'"><i class="fa fa-chevron-right"></i> <div class="menu-piece">'+origText+'</div></a>');
	});
	jQuery(".masonry .item .hov-details .short-desc p").filter(function(){
		return jQuery.trim(this.innerHTML) === "&nbsp;"
	}).remove();
	jQuery('.accounts').hover(function(){
		jQuery('.mega-menu').hide();
		jQuery('.mega-menu.accounts').show();
	});

	jQuery('.mega-menu.accounts').hover(function(){

	}, function(){
		jQuery(this).fadeOut();
	});

	jQuery('.resp-menu i').click(function(){
		jQuery('.resp-menu ul').slideToggle();
		jQuery('.sub-menu').hide();
	});

	jQuery('.logo, .product-search').hover(function(){
		jQuery('.mega-menu').hide();
	});

	jQuery('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		speed: 900,
		autoplaySpeed: 3500,
		arrows: false,
		dots: false,
	});


	jQuery('.instagram-feed').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		speed: 1000,
		arrows: true,
		dots: false,
	}).fadeIn('slow');

	jQuery('.resp-menu ul li a').click(function(event){
		//event.preventDefault();
		jQuery('.sub-menu').hide();
		jQuery(this).parent().find('.sub-menu').slideToggle();
	});


	jQuery('.masonry').imagesLoaded(function(){
		jQuery('.masonry').masonry({
			columnWidth: ".grid-sizer", 
			 itemSelector: '.item',
			isAnimated: true
		});

		jQuery('.item').each(function(){
			jQuery(this).show();
		});
		jQuery('.masonry').masonry( 'reload' );
	});

	jQuery('.images .wc-featured-image').wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom({on: 'mouseover'});

	jQuery('.attachment-shop_thumbnail').click(function(){
		var thumbnailSize = jQuery(this).attr('src');
		var fullSize = thumbnailSize.replace('-150x150','');
		jQuery('.images .wc-featured-image').attr('src', fullSize);
		jQuery('.images .wc-featured-image').trigger('zoom.destroy'); 
		jQuery('.images .wc-featured-image').wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom({on: 'mouseover'});
	});

});