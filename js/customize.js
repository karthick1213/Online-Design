// Reference the color shape that was drawn over the image
const overlay = document.getElementById("product-shape");
var inputBox1 = document.getElementById('textInput');

// Click on a color

var el = document.getElementsByClassName("color");
for (var i = 0; i < el.length; i++) {
  el[i].onclick = changeColor;
  // el[5].onclick = changeColortoWhite;
}

function changeColor(e) {
  // get the hex color
  let hex = e.target.getAttribute("data-hex");
  // set the hex color
  overlay.style.fill = hex;
}

//onkeyup text
var inputBox = document.getElementById('myText');
inputBox.onkeyup = function(){
    document.getElementById('textInput').innerHTML = inputBox.value;
}

// Text color changing
var el = document.getElementsByClassName("color1");
for (var i = 0; i < el.length; i++) {
  el[0].onclick = changeColorB;
  el[1].onclick = changeColorW;
}


function changeColorW() {
  inputBox1.style.color = 'white';
}
function changeColorB() {
  inputBox1.style.color = 'black';
}
// text color changing ends

// var logo1 = document.getElementsByClassName("logo1");
// var logo2 = document.getElementsByClassName("logo2");

function logonike() {
  document.getElementById("textInputa").src = "img/mens/nike.png";
  document.getElementById("textInputa").width = "75";
  document.getElementById("textInputa").height = "40";
}
function logostark() {
  document.getElementById("textInputa").src = "img/mens/stark.png";
  document.getElementById("textInputa").width = "65";
  document.getElementById("textInputa").height = "20";
}
