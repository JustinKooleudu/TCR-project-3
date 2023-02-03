var checkbox = document.getElementById("switch");

function mode(){
    var element = document.body;
    element.classList.toggle("lightmode")
}

if (checkbox.checked == true) {
    mode();
}