/*
    gyroscope
    based on ica.art commit e17aeb0223ef388654d65262a32e309152a96727
*/

var x_angle = 0, y_angle = 0;
var logo = document.getElementById('logo');
var logo_r = document.getElementById('logo-r');
var logo_g = document.getElementById('logo-g');
var logo_b = document.getElementById('logo-b');
var alpha, beta, gamma;     // gyrscope x, y, z (z is like y on iphone, points straight up)

// event listeners

// ** todo ** add request device orientation


// see https://kongmunist.medium.com/accessing-the-iphone-accelerometer-with-javascript-in-ios-14-and-13-e146d18bb175

function getAccel(){
    DeviceMotionEvent.requestPermission().then(response => {
        if (response == 'granted') {
            console.log("accelerometer permission granted");
// window.addEventListener("deviceorientation", blur, false);
// window.addEventListener("deviceorientation", shift_y, false);
window.addEventListener("deviceorientation", shift_x, false);
// window.addEventListener("deviceorientation", shift_z, false);
// window.addEventListener("deviceorientation", shift, false);
// window.addEventListener("click", hello_world, false);
        }
    });
}

function blur(e) {
    var gain = 5.0;
    alpha = 0 - e.alpha * gain;
    beta = 0 - e.beta * gain;
    gamma = 0 - e.gamma * gain;
    var gain = 1.0;
    logo_r.style.filter = "blur(" + Math.abs(beta) * .1 * gain + "px)";
    logo_g.style.filter = "blur(" + Math.abs(beta) * .2 * gain + "px)";
    logo_b.style.filter = "blur(" + Math.abs(beta) * .5 * gain + "px)";
    // debug();
}

function shift_x(e) {
    var gain = 5.0;
    gamma = 0 - e.gamma * gain;
    var gain = 1.5;
    gamma_r = maptorange(Math.abs(gamma), 0, 360, 30, 60);
    gamma_g = maptorange(Math.abs(gamma), 0, 360, 30, -10);
    gamma_b = maptorange(Math.abs(gamma), 0, 360, 30, 100);
    logo_r.style.left = gamma_r * gain + "%";
    logo_g.style.left = gamma_g * gain + "%";
    logo_b.style.left = gamma_b * gain + "%";
    // debug();
}

function shift_y(e) {
    var gain = 5.0;
    beta = 0 - e.beta * gain;
    var gain = 1.5;
    beta_r = maptorange(Math.abs(beta), 0, 360, 30, 60);
    beta_g = maptorange(Math.abs(beta), 0, 360, 30, -10);
    beta_b = maptorange(Math.abs(beta), 0, 360, 30, 100);
    logo_r.style.top = beta_r * gain + "%";
    logo_g.style.top = beta_g * gain + "%";
    logo_b.style.top = beta_b * gain + "%";
    // debug();
}

function shift_z(e) {
    var gain = 5.0;
    alpha = 0 - e.alpha * gain;
    var gain = 1.5;
    alpha_r = maptorange(Math.abs(alpha), 0, 360, 30, 60);
    alpha_g = maptorange(Math.abs(alpha), 0, 360, 30, -10);
    alpha_b = maptorange(Math.abs(alpha), 0, 360, 30, 100);
    alpha_r = distancefrommidpoint(alpha_r, 45);
    alpha_g = distancefrommidpoint(alpha_g, 10);
    alpha_b = distancefrommidpoint(alpha_b, 65);
    logo_r.style.left = alpha_r * gain + "%";
    logo_g.style.left = alpha_g * gain + "%";
    logo_b.style.left = alpha_b * gain + "%";
    debug();
}

function gradient(e) {
    var gain = 5.0;
    alpha = 0 - e.alpha * gain;
    beta = 0 - e.beta * gain;
    gamma = 0 - e.gamma * gain;
    var gain = 2.0;
    alpha = maptorange(Math.abs(alpha), 0, 1800, 0, 100);
    alpha = distancefrommidpoint(alpha, 50);
    debug();
}

function hello_world(e) {
    window.alert('hello, world!');
    // window.alert('hello, world --> ' + e );
}

function debug() {
    var debug = document.getElementById('debug');
    debug.style.visibility = "visible";
    debug.innerHTML  = "&alpha; : " + alpha + "<br/>";
    debug.innerHTML += "&beta; : " + beta + "<br/>";
    debug.innerHTML += "&gamma; : " + gamma + "<br/>";
    // debug.innerHTML = "blur: " + beta * .2 * gain + "px" + "<br/>";
}

/* utility */

function maptorange(val, min, max, min_new, max_new) {
    var val_new = (val - min) / (max - min) * (max_new - min_new) + min_new;
    return val_new;
}

function distancefrommidpoint(val, midpoint) {
    var val_new = Math.abs(val - midpoint);
    return val_new;
}
