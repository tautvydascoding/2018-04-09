var header = document.createElement("header");
var text = "Hi. I'm a header.";

var headerTextNode = document.createTextNode(text);
header.appendChild(headerTextNode);

var h1 = document.querySelector("h1");
document.body.insertBefore(header, h1);

// end main.js
console.log("end main.js");
