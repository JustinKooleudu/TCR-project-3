// Dark And Light Mode
// 3 space between new global function
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



// dropdown

function Dropdown() {
    var drop = document.getElementById('dropdown1');
    var Parent = document.getElementById('line');

    var drop = document.getElementById('dropdown1');
    drop.style.transition = '300ms';
    if (drop.style.left === '-30vw') {
        drop.style.left = '0vw';
        Parent.style.position = 'absolute';
    } else {
        drop.style.left = '-30vw';
        Parent.style.position = 'relative';
    }
}


function Dropdown2() {
    //user logo dropdown
    var drp = document.getElementById('dropdown2');
    drp.style.transition = '300ms';
    if (drp.style.opacity === '0') {
        drp.style.opacity = '100';
        drp.style.pointerEvents = 'auto';
    } else {
        drp.style.opacity = '0';
        drp.style.pointerEvents = 'none';
    }
}