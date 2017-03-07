"use strict"
var url = "/data/iventory.json";
var request = $.get(url);
request.fail(function(data, status) {
	console.log(data);
});
request.done(function(data) {
	console.log(data);
	console.log(status);
});