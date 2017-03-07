'use strict';



//step 1  maek sure we can send an ajax request to the source data
//make an ajax request to /data/blog.json to get the data
//console.log that data
	//send an ajax get request to /data/blog.json --> google "how to send ajax GET request in jQuery"
		//where are we sending our request to get the data from?
		// sedn the GET request there
	//always define the function that a .fail method calls -->"how to define a fail method in jQuery"
	//always define the function that a .done method calls -->"how to define a done method in jQuery"
	//have each .fail and .done  console.log "success" or "error"
	//start with both .fail and .done only console.logging the data they get

		var myurl = "/data/blog.json";

		var request = $.get(myurl);
		// $ is not defined

		var htmlString = "";
		request.fail(function(data){
			console.log(data);
		});

		request.done(function(data){
			
		

			var post = data[0];

			data.forEach(function(post){
				
				htmlString += "<h1>" + post.title + "</h1>";
				htmlString += "<p>" + post.content + "</p>";
				htmlString += "<p>categories: <button>" + post.categories + "</button></p>";
				htmlString += "<p>date published: " + post.date + "</p>";
			});
			
			$("#posts").append(htmlString);
			console.log(htmlString);
		});

//step 2 is decide what html elements the data should be
//the blog.json data has an array of blog posts
//each blog post is represented as an object
//the object's properties are:
//title is a string - make the title an h2 element
//content is a string - make the cotent a p tag
//categories is an array of strings - make each category string into a button element
//date is a string - make this a p tag

//step 3 is to get the contents of just one blog post into the html of the div with id="posts"
//get each piece of data in the right html tag
//add any styling (add appropirate bootstrap class names to html elements)

// step 4 is to get all the blog posts into the html
// which means we need to iterate across the array and us js to write html

// step 5 add a button that refreshes the data without reloading the entire browser/page
// to test this, we'll add new blog content (even if itss lorem ipsum) to blog.json
// and click the refresh button without reloading page

//step 6 for each category of each blog post, write the category's string inside a button element

//step 7 add a .click to the title so that by clicking the title it shows the content of the post

//** do Zach's js drills**