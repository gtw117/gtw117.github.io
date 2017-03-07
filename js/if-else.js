"use strict";

var grade1=70;
var grade2=80;
var grade3=95;

if (((grade1 + grade2 + grade3)/3) >= 80) {
	console.log ("You're awesome");
} else {
	console.log ("You need to practice more");
}

var message = (true) ? "You're awesome" : "You need to practice more";

//HEB example anything over $200 is 35% off//

var cameron = 180;
var ryan = 250;
var george = 320;
var georgediscount;
var ryandiscount;
var camerondiscount;


if (george >= 200) {
	georgediscount = (((george - 200) * 0.65) + 200);
} else {
	(georgediscount = george);
}

if (ryan >= 200) {
	ryandiscount = (((ryan - 200) * 0.65) + 200);
} else {
	(ryandiscount = ryan);
}

if (cameron >= 200) {
	camerondiscount = (((cameron - 200) * 0.65) + 200);
} else {
	(camerondiscount = cameron);
}


//example 3//

var flipAcoin = Math.floor(Math.random()*2)
