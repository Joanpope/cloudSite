var urlServer = "http://localhost/cloudSite/public/";

function showMenu(event) {
		$("#itemMenu").css('position', 'absolute');
		$("#itemMenu").css('top', event.pageY); //pos X for the menu
		$("#itemMenu").css('left', event.pageX); //pos Y for the menu
		$("#itemMenu").css('z-index', '10'); //pos Y for the menu
		$("#itemMenu").css("display","block"); //displays the menu
		addEventToMenu(event);
}

function addEventToMenu(event) {
	$('#down').click(event,function() {
		download(event);
	});
}

function download(event) {
	var name = $(event.currentTarget).find(".fiName").text();
	console.log(name);
    updateUrl = "getFile/"+name;
	window.location.href = urlServer+updateUrl;
}


window.onload = function() {
	$.ajaxSetup({
	    headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
    });
	$('.dropdownmenu').click(function(e) {
		showMenu(e);
	});
	$('#itemMenu').mouseleave(function(event) {
		$("#itemMenu").hide();
	});
}