'use strict';

// declare a function that will be invoked immediately
// notice the parens surrounding the function. these are necessary
(function () {
    // variables and functions in here are only accessible inside this function's scope
    var iffeVar = "I'm local to the IIFE.";
})();
// also notice the double parenthesis after the closing curly brace. these invoke the function.

alert(iffeVar); // undefined