$(function() {
	new GsapCast( $("#gsap") );
});
function GsapCast( $obj ) {
	gsap.registerPlugin(ScrollTrigger);
	this.target =
	this.tgScrollTrigger = null;
	this.init( $obj );
	this.initCast();
}
GsapCast.prototype.init = function( $obj ) {
	this.target = $obj
	this.tgScrollTrigger = $(".gsapPkg", $obj );
}
GsapCast.prototype.initCast = function() {
	let thiss = this;
	$(window).on("load", function() {
		thiss.scrTrgCast();
	});
}
GsapCast.prototype.scrTrgCast = function() {
	let thiss = this;
	thiss.tgScrollTrigger.each( function( index, item ) {
		$thisGsap = $(this);
		if ( typeof $(this).attr("id") == "string" ) {
			ScrollTrigger.create({
				trigger : $(".sectionTitle", item )
				, pin : true
				, anticipatePin : 1
				, start : "top top"
				, end : "bottom bottom"
				// , markers : { indent : ( index * 100 ) }
				// , id : "gsap0" + index
				//, onEnter : ONENTER
				//, onEnterBack : ONENTERBACK
				//, onLeave : ONLEAVE
				//, onLeaveBack : ONLEAVEBACK
			});
		}
	});
}