
function showMenu(event) {
		$("#itemMenu").css('position', 'absolute');
		$("#itemMenu").css('top', event.pageY); //pos X for the menu
		$("#itemMenu").css('left', event.pageX); //pos Y for the menu
		$("#itemMenu").css('z-index', '20'); //pos Y for the menu
		$("#itemMenu").css("display","block"); //displays the menu

}



window.onload = function() {
	$('.dropdownmenu').click(function(e) {
		showMenu(e);
	})
	$('#itemMenu').mouseleave(function(event) {
		$("#itemMenu").hide();
	});
}