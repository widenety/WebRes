$(window).on("load", function() {
	new OwlCast( $("#owl") );
	new SwpCast( $("#swp"), "#swp" );
	new BxsCast( $("#bxs"), "#bxs" );
	new SlcCast( $("#slc"), "#slc" );
});

/* ==============================
* 01. Owl Carousel
================================= */
function OwlCast( $obj ) {
	this.owlTarget =
	this.owlList =
	this.owlAuto =
	this.owlAutoFlag =
	this.owlDots =
	this.owlDelay = null;
	this.init( $obj );
	this.initCast();
}
OwlCast.prototype.init = function( $obj ) {
	this.owlTarget = $obj
	this.owlList = $(".dataList", this.owlTarget );
	this.owlAuto = $(".dataAuto", this.owlTarget );
	this.owlAutoFlag = true;
	this.owlDots = $(".dataDots", this.owlTarget );
	this.owlDelay = 3000;
}
OwlCast.prototype.initCast = function() {
	let thiss = this;
	thiss.owlList.owlCarousel({
		items : 1
		, loop : true
		, margin : 0
		, nav : true
		, navText : [ "<span class='blind'>이전 장면</span>", "<span class='blind'>다음 장면</span>" ]
		, dots : true
		, dotsContainer : thiss.owlDots
		, autoplay : true
		, autoplayTimeout : thiss.owlDelay
		, autoplayHoverPause : false
		, smartSpeed : 1000
		, onInitialized : onInitd
		, onTranslate : onTranse
		, onTranslated : onTransed
		, onResized : onResized
		, responsiveRefreshRate : 0
	});
	$("button", thiss.owlAuto ).on("click", function() {
		$(this).hide();
		$(this).siblings().show();
		if ( $(this).hasClass("btn-stop") ) {
			thiss.owlAutoFlag = false;
			thiss.owlList.trigger("stop.owl.autoplay");
		} else if ( $(this).hasClass("btn-play") ) {
			thiss.owlAutoFlag = true;
			thiss.owlList.trigger("play.owl.autoplay", [thiss.owlDelay]);
		}
	});
	function onInitd() {
		$("button", thiss.owlDots ).each( function( index, item ) {
			$(this).html( "<span class='blind txt'>" + ( index + 1 ) + "번째 장면</span><span class='blind sel'>선택됨</span>" );
		});
	}
	function onTranse( event ) {
		let element = $(event.target);
		element.trigger("stop.owl.autoplay");
	}
	function onTransed( event ) {
		let element = $(event.target);
		if ( thiss.owlAutoFlag ) {
			element.trigger("play.owl.autoplay", [thiss.owlDelay]);
		}
	}
	function onResized( event ) {
		let element = $(event.target);
		if ( thiss.owlAutoFlag ) {
			element.trigger("play.owl.autoplay", [thiss.owlDelay]);
		} else {
			element.trigger("stop.owl.autoplay");
		}
	}
}

/* ==============================
* 02. Swiper Carousel
================================= */
function SwpCast( $obj, $objStr ) {
	this.swpCore =
	this.swpTarget =
	this.swpTargetStr =
	this.swpListStr =
	this.swpNaviStr =
	this.swpPrevStr =
	this.swpNextStr =
	this.swpDotsStr =
	this.swpAuto =
	this.swpDelay = null;
	this.init( $obj, $objStr );
	this.initCast();
}
SwpCast.prototype.init = function( $obj, $objStr ) {
	this.swpTarget = $obj;
	this.swpListStr = $objStr + " .dataList";
	this.swpDotsStr = $objStr + " .dataDots";
	this.swpNaviStr = $objStr + " .dataNavi";
	this.swpPrevStr = $objStr + " .btn-prev";
	this.swpNextStr = $objStr + " .btn-next";
	this.swpAuto = $(".dataAuto", this.swpTarget );
}
SwpCast.prototype.initCast = function() {
	let thiss = this;
	thiss.swpCore = new Swiper( thiss.swpListStr, {
		slidesPerView : 1
		, speed : 1000
		, rewind : true
		, spaceBetween : 0
		, direction : "horizontal"
		, loop : true
		, autoplay : {
			delay : 3000
			, disableOnInteraction : false
		}
		, navigation: {
			el : thiss.swpNaviStr
			, nextEl : thiss.swpNextStr
			, prevEl : thiss.swpPrevStr
		}
		, pagination: {
			el : thiss.swpDotsStr
			, clickable : true
			, renderBullet : function ( index, className ) {
				return "<button type='button' class='swiper-dot " + className + "'><span class='blind txt'>" + ( index + 1 ) + "번째 장면</span><span class='blind sel'>선택됨</span></button>";
			}
		}
	});
	$("button", thiss.swpAuto ).on("click", function() {
		$(this).hide();
		$(this).siblings().show();
		if ( $(this).hasClass("btn-stop") ) {
			console.log( "stop" );
			thiss.swpCore.autoplay.stop();
		} else if ( $(this).hasClass("btn-play") ) {
			console.log( "play" );
			thiss.swpCore.autoplay.start();
		}
	});
}

/* ==============================
* 03. bxSlider
================================= */
function BxsCast( $obj, $objStr ) {
	this.bxsTarget =
	this.bxsList =
	this.bxsAutoStr =
	this.bxsDotsStr =
	this.bxsPrevStr =
	this.bxsNextStr =
	this.bxsDelay = null;
	this.init( $obj, $objStr );
	this.initCast();
}
BxsCast.prototype.init = function( $obj, $objStr ) {
	this.bxsTarget = $obj;
	this.bxsList = $(".dataList", this.bxsTarget );
	this.bxsDotsStr = $objStr + " .dataDots";
	this.bxsAutoStr = $objStr + " .dataAuto";
	this.bxsPrevStr = $objStr + " .btn-prev";
	this.bxsNextStr = $objStr + " .btn-next";
}
BxsCast.prototype.initCast = function() {
	let thiss = this;
	thiss.bxsList.bxSlider({
		auto : true
		, randomStart : false
		, startSlide : 0
		, speed : 1000
		, stopAutoOnClick : false
		, autoControls : true
		, autoControlsSelector : thiss.bxsAutoStr
		, prevText : "이전 장면"
		, nextText : "다음 장면"
		, prevSelector : thiss.bxsPrevStr
		, nextSelector : thiss.bxsNextStr
		, stopText : "자동정지"
		, startText : "자동시작"
		, pause : 3000
		, stopAutoOnClick : true
		, pager : true
		, pagerCustom : thiss.bxsDotsStr
	});
}

/* ==============================
* 04. Slick
================================= */
function SlcCast( $obj, $objStr ) {
	this.slcTarget =
	this.slcList =
	this.slcStop =
	this.slcPlay =
	this.slcAuto =
	this.slcNaviStr =
	this.slcDotsStr = null;
	this.init( $obj, $objStr );
	this.initCast();
}
SlcCast.prototype.init = function( $obj, $objStr ) {
	this.slcTarget = $obj;
	this.slcList = $(".dataList", this.slcTarget );
	this.slcStop = $(".btn-stop", $obj );
	this.slcPlay = $(".btn-play", $obj );
	this.slcAuto = $(".dataAuto", $obj );
	this.slcNaviStr = $objStr + " .dataNavi";
	this.slcDotsStr = $objStr + " .dataDots";
}
SlcCast.prototype.initCast = function() {
	let thiss = this;
	thiss.slcList.slick({
		slidesToShow : 1
		, slidesToScroll : 1
		, autoplay : true
		, autoplaySpeed : 3000
		, arrows : true
		, appendArrows : thiss.slcNaviStr
		, prevArrow : "<button type='button' class='btn-prev'><span class='blind'>이전 장면</span></button>"
		, nextArrow : "<button type='button' class='btn-next'><span class='blind'>다음 장면</span></button>"
		, dots : true
		, appendDots : thiss.slcDotsStr
		, rows : 1
		, speed : 1000
	});
	$("button", thiss.slcAuto ).on("click", function() {
		$(this).hide();
		$(this).siblings().show();
		if ( $(this).hasClass("btn-stop") ) {
			thiss.slcList.slick("slickPause");
		} else if ( $(this).hasClass("btn-play") ) {
			thiss.slcList.slick("slickPlay");
		}
	});
}