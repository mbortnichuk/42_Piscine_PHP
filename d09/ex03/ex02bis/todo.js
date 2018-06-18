$(document).ready(function(){
    var array = document.cookie.split(';');
    if (Array.isArray(array) && array[0] != '') {
        for (i = 0; i < array.length; i++) {
            temp = array[i].split('=');
            addTodo(temp[1]);
        }
    }
})

function enterTodo() {
    var name = prompt("Enter a new TO DO name: ");
    if (name != '') {
        addTodo(name);
    }
}

function addTodo(todo) {
    if (todo != '') {
        $('#ft_list').prepend($('<div>' + todo + '</div>').click(delTodo));
        addCook(todo);
    }
}

function delTodo() {
    if (confirm("You really want to delete this TO DO?")) {
       this.remove();
       delCook(this.innerHTML);
    }
}

function addCook(todo) {
    document.cookie = todo + "=" + todo + ";";
}

function delCook(todo) {
    document.cookie = todo + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}