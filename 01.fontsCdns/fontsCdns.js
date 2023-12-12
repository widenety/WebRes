$(function() {
	new FoldPkg( $(".foldUnit"), $(".foldAllCtrl") );
});
function FoldPkg( $obj, $objAllCtrl ) {
	this.foldUnit = null;
	this.foldCtrlBtn = null;
	this.foldCtrlBody = null;

	this.foldCtrlAllBtn = null;
	this.foldCtrlAllRefresh = null;
	this.foldCtrlAllBtnOpen = null;
	this.foldCtrlAllBtnClose = null;
	this.init( $obj, $objAllCtrl );
	this.evtCast();
}
FoldPkg.prototype.init = function( $obj, $objAllCtrl ) {
	this.foldUnit = $obj
	this.foldCtrlBtn = $(".ctrl", this.foldUnit );

	this.foldCtrlAllBtn = $objAllCtrl;
	this.foldCtrlAllRefresh = $(".refresh", this.foldCtrlAllBtn );
	this.foldCtrlAllBtnOpen = $(".open", this.foldCtrlAllBtn );
	this.foldCtrlAllBtnClose = $(".close", this.foldCtrlAllBtn );
}
FoldPkg.prototype.evtCast = function() {
	var sThis = this;
	sThis.foldCtrlBtn.on("click", function() {			// ** 각 열기.
		sThis.openEach( $(this) );
	});
	this.foldCtrlAllBtnOpen.on("click", function() {	// ** 전체 열기.
		sThis.openAll();
	});
	this.foldCtrlAllBtnClose.on("click", function() {	// ** 전체 닫기.
		sThis.closeAll();
	});
	this.foldCtrlAllRefresh.on("click", function() {	// ** 새로 고침.
		sThis.refresh();
	});
}
FoldPkg.prototype.openEach = function( $obj ) {
	var sThis = this;

	// ** THIS
	$thisUnit = $obj.closest( sThis.foldUnit );
	if ( $thisUnit.hasClass("open") ) {
		$thisUnit.removeClass("open");
		$(".foldBody", $thisUnit ).slideUp();
	} else {
		$thisUnit.addClass("open");
		$(".foldBody", $thisUnit ).slideDown();
	}

	// ** OTHER
	/*
	$otherUnit = $thisUnit.siblings();
	$otherUnit.removeClass("open");
	$(".foldBody", $otherUnit ).slideUp();
	// */
}
FoldPkg.prototype.openAll = function() {
	var sThis = this;
	sThis.foldUnit.each( function( index, item ) {
		$(this).addClass("open");
		$(".foldBody", $(this) ).slideDown();
	});
}
FoldPkg.prototype.closeAll = function() {
	var sThis = this;
	sThis.foldUnit.each( function( index, item ) {
		$(this).removeClass("open");
		$(".foldBody", $(this) ).slideUp();
	});
}
FoldPkg.prototype.refresh = function() {
	location.reload();
}