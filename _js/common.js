$(function() {
	new MobileNaviController( $("#nav"), $("#nav").next(), $("#mNaviOpener"), $("#mNaviCloser") );
	new Skeleton( $(".skeleton_loading") );
});

/* ==============================
* MOBILE SIDEMENU
================================= */
function MobileNaviController( $nav, $navOverlay, $opener, $closer ) {
	this.mNavi =
	this.mNaviOverlay =
	this.mNaviOpenerBtn =
	this.mNaviCloserBtn = null;
	this.init( $nav, $navOverlay, $opener, $closer );
	this.evtCast();
}
MobileNaviController.prototype.init = function( $nav, $navOverlay, $opener, $closer ) {
	this.mNavi = $nav;
	this.mNaviOverlay = $navOverlay;
	this.mNaviOpenerBtn = $opener;
	this.mNaviCloserBtn = $closer;
}
MobileNaviController.prototype.evtCast = function() {
	var sThis = this;

	// ** mNavi 열기
	sThis.mNaviOpenerBtn.on("click", function() {
		sThis.mNaviOpenFnc();
	});

	// ** mNavi 닫기
	sThis.mNaviCloserBtn.on("click", function() {
		sThis.mNaviCloseFnc();
	});
	sThis.mNaviOverlay.on("click", function() {
		sThis.mNaviCloseFnc();
	});
}
MobileNaviController.prototype.mNaviOpenFnc = function() {
	var sThis = this;
	sThis.mNavi.addClass("show");
	sThis.mNaviOverlay.addClass("show");
	setTimeout( function() { sThis.mNaviOverlay.addClass("open"); }, 10 );
}
MobileNaviController.prototype.mNaviCloseFnc = function() {
	var sThis = this;
	sThis.mNavi.removeClass("show");
	sThis.mNaviOverlay.addClass("close");
	setTimeout( function() {
		sThis.mNaviOverlay.removeClass("open close show");
	}, 500 );
}

/* ==============================
* SKELETON
================================= */
function Skeleton( $obj ) {
	this.target =
	this.targetTxt =
	this.targetImg = null;
	this.init( $obj );
	this.initCast();
}
Skeleton.prototype.init = function( $obj ) {
	this.target = $obj
	this.targetTxt = $(".skeleton_txt", $obj );
	this.targetImg = $(".skeleton_img", $obj );
}
Skeleton.prototype.initCast = function() {
	let thiss = this;
	$(window).on("load", function() {
		thiss.target.each( function() {
			$(".skeleton", $(this) ).removeClass("skeleton");
		});
	});
}