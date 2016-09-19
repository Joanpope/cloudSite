var mOptions = ["Descargar","Eliminar"]

function showMenu(event) {
	console.log(event);
		var elementCreated = createMenuElements(mOptions);
		$(elementCreated).css('background-color', 'grey');
		$(elementCreated).css('position', 'absolute');
		$(elementCreated).css('top', event.pageY); //pos X for the menu
		$(elementCreated).css('left', event.pageX); //pos Y for the menu
		$(elementCreated).css('display', "block"); //displays the menu
		$("body").append(elementCreated);
}

function createMenuElements(mOptions) {
		var div = document.createElement("div");        // Create a <div> element to contain the options
		div.id = "itemMenu";
		for (var i = 0; i < mOptions.length; i++) {
				var span = document.createElement("span");        // Create a <span> element 
				var t = document.createTextNode(mOptions[i]);       // Create a text node
				span.appendChild(t);              // Append the text to <span>
				span.className = "option";
				div.appendChild(span);              // Append the text to the <div> we created earlier
		}
		console.log(div);
		return div;
}

window.onload = function() {
	$('.dropdownmenu').click(function(e) {
		showMenu(e);
	})
}