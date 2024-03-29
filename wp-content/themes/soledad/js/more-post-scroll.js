jQuery( document ).ready( function ( $ ) {
	var $this_scroll = $('.penci-ajax-more-scroll .penci-ajax-more-button');
	if ( $this_scroll.length ) {
		$( window ).scroll( function () {
			var hT = $this_scroll.offset().top,
				hH = $this_scroll.outerHeight(),
				wH = $( window ).height(),
				wS = $( this ).scrollTop();

			if ( ( wS > ( hT + hH - wH ) ) && $this_scroll.length ) {
				if ( ! $this_scroll.hasClass( 'loading-posts' ) ) {
					var layout = $this_scroll.data( 'layout' ),
						ppp = $this_scroll.data( 'number' ),
						mes = $this_scroll.data( 'mes' ),
						offset = $this_scroll.attr( 'data-offset' ),
						exclude = $this_scroll.data( 'exclude' ),
						from = $this_scroll.data( 'from' ),
						template = $this_scroll.data( 'template' );

					$this_scroll.addClass( 'loading-posts' );

					$.ajax( {
						type    : "POST",
						dataType: "html",
						url     : ajax_var_more.url,
						data    : 'offset=' + offset + '&layout=' + layout + '&exclude=' + exclude + '&from=' + from + '&template=' + template + '&ppp=' + ppp + '&action=penci_more_post_ajax&nonce=' + ajax_var_more.nonce,
						success : function ( data ) {
							if ( data ) {
								var data_offset = parseInt( offset ) + ppp,
									$wrap_content = $this_scroll.parent().parent().find( '.penci-wrapper-data' );

								$this_scroll.attr( 'data-offset', data_offset );
								if ( layout === 'masonry' || layout === 'masonry-2' ) {
									var $data = $( data );
									$wrap_content.append( $data ).isotope( 'appended', $data ).imagesLoaded( function () {
										$wrap_content.isotope( 'layout' );
									} );

									$( ".container" ).fitVids();

									$('.penci-wrapper-data .penci-owl-carousel-slider').each(function () {
										var $this = $(this),
											$rtl = false;
										if( $('html').attr('dir') === 'rtl' ) {
											$rtl = true;
										}
										var owl_args = {
											rtl               : $rtl,
											loop              : true,
											margin            : 0,
											items             : 1,
											navSpeed          : 600,
											lazyLoad          : true,
											dotsSpeed         : 600,
											nav               : true,
											dots              : false,
											navText           : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
											autoplay          : true,
											autoplayTimeout   : 5000,
											autoHeight        : true,
											autoplayHoverPause: true,
											autoplaySpeed     : 600
										};

										$this.owlCarousel(owl_args);
									});

									if( $().easyPieChart ) {
										$( '.penci-piechart' ).each( function () {
											var $this = $( this );
											$this.one( 'inview', function ( event, isInView, visiblePartX, visiblePartY ) {
												var chart_args = {
													barColor  : $this.data( 'color' ),
													trackColor: $this.data( 'trackcolor' ),
													scaleColor: false,
													lineWidth : $this.data( 'thickness' ),
													size      : $this.data( 'size' ),
													animate   : 1000
												};
												$this.easyPieChart( chart_args );
											} ); // bind inview
										} ); // each
									}
									
									$('.penci-lazy').Lazy({
										effect: 'fadeIn',
										effectTime: 300,
										scrollDirection: 'both'
									});

								} else {
									var $data = $( data );
									$wrap_content.append( $data );

									$('.penci-lazy').Lazy({
										effect: 'fadeIn',
										effectTime: 300,
										scrollDirection: 'both'
									});

									$( ".container" ).fitVids();

									$('.penci-wrapper-data .penci-owl-carousel-slider').each(function () {
										var $this = $(this),
											$datalazy = false,
											$rtl = false;

										if( $('html').attr('dir') === 'rtl' ) {
											$rtl = true;
										}
										if ( $this.attr('data-lazy') ) {
											$datalazy = true;
										}
										var owl_args = {
											rtl               : $rtl,
											loop              : true,
											margin            : 0,
											items             : 1,
											navSpeed          : 600,
											dotsSpeed         : 600,
											lazyLoad          : $datalazy,
											nav               : true,
											dots              : false,
											navText           : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
											autoplay          : true,
											autoplayTimeout   : 5000,
											autoHeight        : true,
											autoplayHoverPause: true,
											autoplaySpeed     : 600
										};

										$this.imagesLoaded(function () {
											$this.owlCarousel(owl_args);
										});

										$this.on('changed.owl.carousel', function(event) {
											$('.penci-lazy').Lazy({
												effect: 'fadeIn',
												effectTime: 300,
												scrollDirection: 'both'
											});
										});
									});

									if( $().easyPieChart ) {
										$( '.penci-piechart' ).each( function () {
											var $this = $( this );
											$this.one( 'inview', function ( event, isInView, visiblePartX, visiblePartY ) {
												var chart_args = {
													barColor  : $this.data( 'color' ),
													trackColor: $this.data( 'trackcolor' ),
													scaleColor: false,
													lineWidth : $this.data( 'thickness' ),
													size      : $this.data( 'size' ),
													animate   : 1000
												};
												$this.easyPieChart( chart_args );
											} ); // bind inview
										} ); // each
									}
									
									var $justified_gallery = $( '.penci-post-gallery-container.justified' );
									var $masonry_gallery = $( '.penci-post-gallery-container.masonry' );
									if ( $().justifiedGallery && $justified_gallery.length ) {
										$( '.penci-post-gallery-container.justified' ).each( function () {
											var $this = $( this );
											$this.justifiedGallery( {
												rowHeight: $this.data( 'height' ),
												lastRow  : 'nojustify',
												margins  : $this.data( 'margin' ),
												randomize: false
											} );
										} ); // each .penci-post-gallery-container
									}

									if ( $().isotope && $masonry_gallery.length ) {

										$('.penci-post-gallery-container.masonry .item-gallery-masonry').each(function () {
											var $this = $(this);
											if ($this.attr('title')) {
												var $title = $this.attr('title');
												$this.children().append('<div class="caption">' + $title + '</div>');
											}
										});
									}

									$(window).load(function() {
										if ( $masonry_gallery.length ) {
											$masonry_gallery.each( function () {
												var $this = $( this );
												// initialize isotope
												$this.isotope( {
													itemSelector      : '.item-gallery-masonry',
													transitionDuration: '.55s',
													layoutMode        : 'masonry'
												} );

												$this.addClass( 'loaded' );

												$('.penci-post-gallery-container.masonry .item-gallery-masonry').each( function () {
													var $this = $( this );
													$this.one( 'inview', function ( event, isInView, visiblePartX, visiblePartY ) {
														$this.addClass( 'animated' );
													} ); // inview
												} ); // each

											} );
										}
									});

									if ( $().theiaStickySidebar ) {
										var top_margin = 90;
										if( $('body' ).hasClass('admin-bar') ) {
											top_margin = 122;
										}
										$('#main.penci-main-sticky-sidebar, #sidebar.penci-sticky-sidebar' ).theiaStickySidebar({
											// settings
											additionalMarginTop: top_margin
										});
									} // if sticky
								}

								$this_scroll.removeClass( 'loading-posts' );

							} else {
								$( ".penci-ajax-more-button .ajax-more-text" ).text( mes );
								$( ".penci-ajax-more-button i" ).remove();
								$this_scroll.removeClass( 'loading-posts' );
								setTimeout( function () {
									$this_scroll.parent().remove();
								}, 1200 );
							}
						},
						error   : function ( jqXHR, textStatus, errorThrown ) {
							$loader.html( jqXHR + " :: " + textStatus + " :: " + errorThrown );
						}

					} );
				}
			}
		} );
	}
} );