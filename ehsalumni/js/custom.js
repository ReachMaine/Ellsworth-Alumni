
$(window).load(function() {
	// set height of wrapper s.t. left & right sidebars (inherit) fill in height.
	var contentRowHeight = Math.max($('#main-content').height(), $('#left').height(),$('#right').height() )
	//console.log('Row Height is: ' + contentRowHeight);
	$('#content-wrapper').css('height', contentRowHeight);
});