var imgCount = 3;
var dir = '/opgaver/opgave2/style/img/header/';
var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
var images = new Array;
images[1] = "banner01.jpg";
images[2] = "banner02.jpg";
images[3] = "banner03.jpg";

document.getElementById("main_header").style.backgroundImage = "url(" + dir + images[randomCount] + ")";
