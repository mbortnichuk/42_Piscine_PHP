window.onload = function() {
	var array = document.cookie.split(';');
	if (Array.isArray(array) && array[0] != '') {
		for (i = 0; i < array.length; i++) {
			temp = array[i].split('=');
			addTodo(temp[1]);
		}
	}
}

function addTodo(todo) {
	if (todo != '' && todo != 'null') {
		var elem = document.createElement("DIV");
		var elemtext = document.createTextNode(todo);
		elem.appendChild(elemtext);
		elem.addEventListener("click", delTodo);
		elem.addEventListener("click", function() { delCook(todo); });
		document.getElementById("ft_list").insertBefore(elem, document.getElementById("ft_list").firstChild);
		addCook(todo);
	}
}

function enterTodo() {
	var name = prompt("Enter a new TO DO name: ");
	if (name != "") {
		addTodo(name);
	}
}

function delTodo() {
	if (confirm("You really want to delete this TO DO?")) {
		this.parentNode.removeChild(this);
	}
}

function addCook(todo) {
	document.cookie = todo + "=" + todo + ";";
}

function delCook(todo) {
	document.cookie = todo + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
