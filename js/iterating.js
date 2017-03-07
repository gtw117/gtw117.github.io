(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.

    	var name = ['jim', 'joe', 'josh', 'jack']

    // TODO: Create a log statement that will log the number of elements in the names array.
    	console.log (name.length)
    // TODO: Create log statements that will print each of the name array elements individually.
    	console.log(name[0])
    	console.log(name[1])
    	console.log(name[2])
    	console.log(name[3])


    	for (var i = 0; i < name.length; i++) {
    console.log('The name at index ' + i + ' is: ' + name[i]);


    name.foreach(function (element, index, array)
	console.log('the name at index ' + index + ' is: ' + element);
})();