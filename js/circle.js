(function() {
    "use strict";

    // create a circle object
    var circle = {
        radius: 3,

        getArea: function (radius) {
            // TODO: complete this method
            // hint: area = pi * radius^2
            
            return Math.PI * (circle.radius * circle.radius); 

            // TODO: return the proper value
        },

        logInfo: function (doRounding) {
            var area = circle.getArea();
            // TODO: complete this method.
            if (doRounding == true) {
                area = Math.round(area)
            }
            // If doRounding is true, round the result to the nearest integer.
            // Otherwise, output the complete value

         ∏   console.log("Area of a circle with radius: " + this.radius + ", is: " + area);
        }
    };
    console.log("My circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

    console.log("=======================================================");
    // TODO: Change the radius of the circle to 5.
        circle.radius = 5
    // log info about the circle
    console.log("My circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);
})();