$(function() {
	new LottieCast( $("#lottie"), "#lottie" );
});
function LottieCast( $obj ) {
	this.lottTarget =
	this.lottArr = null;
	this.init( $obj );
	this.initCast();
}
LottieCast.prototype.init = function( $obj ) {
	this.lottTarget = $obj;
	this.lottArr = ["aniCube_1", "ani404_1", "aniPyramid_1", "aniComputer_1", "ani3Dcube_1", "aniGrouUp_1"];	// ** , "aniAtom_1", "aniWireFrame_1", "aniBicycle_1", "aniGraph_1", "aniPencil_1", "aniTrash_1", "aniHello_1", "aniSearch_1", "aniLocation_1"
}
LottieCast.prototype.initCast = function() {
	let thiss = this;
	for( let lottieIdx=0; lottieIdx<thiss.lottArr.length; lottieIdx++ ) {
		let lottieStr = thiss.lottArr[lottieIdx];
		lottie.loadAnimation({
			container : $( "#"+lottieStr, thiss.lottTarget )[0]
			, renderer : "svg"
			, loop : true
			, autoplay : true
			, path : "/WebRes/05.lottieFiles/_ani/" + lottieStr + ".json"
		});
	}
}