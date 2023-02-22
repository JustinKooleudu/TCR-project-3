// dropdown
function Dropdown() {
    var drop = document.getElementById('dropdown1');
    var Parent = document.getElementById('line');
    
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
    drp.style.pointerEvents = 'none';
    if (drp.style.opacity === '0') {
        drp.style.opacity = '100';
        drp.style.pointerEvents = 'auto';
    } else {
        drp.style.opacity = '0';
        drp.style.pointerEvents = 'none';
    }
}

//Light AND Dark MODE ----------------------------------------------------------------------------------------------------------------------------------------------------------------
function Lightmode() {
    const root = document.querySelector(':root');
    var modes = document.getElementById("Lightmode");
    modes.innerHTML = "Toggle Light Mode <i id='BrightIcon' class='fas fa-sun'></i>";

    // set css variable
    root.style.setProperty('--V5', 'rgb(15, 15, 15)');
    root.style.setProperty('--V4', 'rgb(35, 35, 35)');
    root.style.setProperty('--V3', 'rgb(95, 95, 95)');
    root.style.setProperty('--V2', 'rgb(135, 135, 135)');
    root.style.setProperty('--V15', 'rgb(140, 140, 140)');
    root.style.setProperty('--V1', 'rgb(145, 145, 145)');
    root.style.setProperty('--black', 'rgb(255, 255, 255)');
    root.style.setProperty('--white', 'rgb(0, 0, 0)');
}
function Darkmode() {
    const root = document.querySelector(':root');
    var modes = document.getElementById("Lightmode");
    modes.innerHTML = "Toggle Dark Mode <i id='BrightIcon' class='fas fa-moon'></i>";

    // set css variable
    root.style.setProperty('--V5', 'rgb(240, 240, 240)');
    root.style.setProperty('--V4', 'rgb(120, 120, 120)');
    root.style.setProperty('--V3', 'rgb(60, 60, 60)');
    root.style.setProperty('--V2', 'rgb(20, 20, 20)');
    root.style.setProperty('--V15', 'rgb(15, 15, 15)');
    root.style.setProperty('--V1', 'rgb(10, 10, 10)');
    root.style.setProperty('--black', 'rgb(0, 0, 0)');
    root.style.setProperty('--white', 'rgb(255, 255, 255)');
}

//Start up ----------------------------------------------------------------------------------------------------------------------------------------------------------------
window.onload=function(){
    //Starndarts
    Dropdown();
    Dropdown2();
    //silde
    // document.getElementById("main-banner").onmouseenter = function() {
    //     clearInterval(startLoop);
    // }
    // document.getElementById("main-banner").onmouseleave = function() {
    //     startLoop = setInterval(function() {
    //     bannerLoop();
    // }, 4000);
    // }
}

