function lightmode() {
    var element = document.body;
    element.classList.toggle("light-mode");
}

function switch() {
    var checkBox = document.getElementById("switch");

    if (checkBox.checked == true) {
        lightmode();
    }
}