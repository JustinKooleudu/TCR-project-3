function light_mode() {
    var element = document.body;
    element.classList.toggle("light-mode");
}

function light_switch() {
    var checkBox = document.getElementById("switch");

    if (checkBox.checked == true) {
        light_mode();
    }
    else {
        light_mode();
    }
}

var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
    $checkboxes = $("#checkbox-container :checkbox");

$checkboxes.on("change", function () {
    $checkboxes.each(function () {
        checkboxValues[this.id] = this.checked;
    });

    localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
});

$.each(checkboxValues, function (key, value) {
    $("#" + key).prop('checked', value);
});