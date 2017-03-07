<?php 
    var_dump($_GET);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Practice</title>
</head>
<body>
    <h1><a href="form.php?search_query=javascript+the+good+parts">All Youtube Results for "JavaScript The Good Parts</a></h1>

    <h2>Examples of links using query strings</h2>
    <ul>
        <li><a href="?page=2">Page 2</a></li>
        <li><a href="?page=2&limit=10">Page 2, Limit to 10 results at a time</a>
        <li><a href="?zipcode=78205&property_type=condo">Condos in 78205</a></li>
        <li><a href="http://caniuse.com/?feat=input-placeholder#feat=input-placeholder">Can I use placeholders instead of labels?</a></li>
    </ul>

    <h1>Property search below:</h1>
    <!-- Form's action is where the request goes -->
    <form action="form.php" method="GET">
        <p>
            <label for="zipcode">zipcode</label>
            <input type="text" id="zipcode" name="zipcode">
        </p>
        <p>
            <label for="property_type">property_type</label>
            <input type="text" id="property_type" name="property_type">
        </p>
        <p>
            <label for="min_price">Min Price</label>
            <input type="text" name="min_price" id="min_price">
        </p>
        <p>
            <label for="max_price">Max Price</label>
            <input type="text" name="max_price" id="max_price">
        </p>
        <button type="submit">Search now!</button>
    </form>

    <h1>Search youtube</h1>   
    <form action="https://youtube.com/results" method="GET">
        <p>
            <label for="search_query">Search</label>
            <input type="text" name="search_query" id="search_query">
        </p>
        <button type="submit">Find videos</button>
    </form>  
    <h1>search amazon</h1>
    <form action="https://www.amazon.com/s/" method="GET">
        <p>
            <label for="field-keywords">Search</label>
            <input type="text" name="field-keywords" id="field-keywords">
        </p>
        <button type="submit">find your item</button>
    </form>
    <h2>user login</h2>
    <form action="form.php" method="POST">
        <p>
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="enter username here">

            <label for="password">password</label>
            <input type="text" id="password" name="password" placeholder="enter password here.">
            <p>
            <button type="submit">login</button>
            </p>
        </p>
    </form>
    <h2>compose email</h2>
    <form action="form.php" method="POST">
        <p>
            <label for="to">to</label>
            <input type="text" id="to" name="to" placeholder="to">
            <br>
            <label for="for">for</label>
            <input type="for" id="for" name="for" placeholder="for">
            <br>
            <textarea name="email_body" id="email_body" cols="30" rows="10" placeholder="type your email here"></textarea>
        </p>    
            <button type="submit">send</button>
    
    <!-- below this is homework:
Forms Homework
    Make a form for ordering pizza!
    w/ as many real world options as you can think of.
    Make a new user registration form, w/ the appropriate input types
        - first name, last name
        - username, password
        - add a checkbox for "sign me up for the newletter"
        - BONUS: add an image input so folks can add an avatar image
    Make a real estate search form w/ appropriate input types and values
    Bonus: wire it up to a real site -->


<!--PIZZAPLACE order form-->

<h2>create your pizza</h2>
    <form method="POST" action="form.php">
        <p>Types of pizza</p>
            <label>
                <input type="checkbox" name="q1" value="hand tossed">hand tossed
            </label>
            <label>
                <input type="checkbox" name="q1" value="deep dish">deep dish
            </label>
            <label>
                <input type="checkbox" name="q1" value="gluten free ">gluten free
            </label>

        <p>toppings</p>
            <label>
                <input type="radio" name="q2a" value="pepperoni">pepperoni
            </label>
            <label>
                <input type="radio" name="q2b" value="sausage">sausage
            </label>
            <label>
                <input type="radio" name="q2c" value="anchovies">anchovies
            </label>
            <label>
                <input type="radio" name="q2d" value="canadian bacon">canadian bacon
            </label>
            <label>
                <input type="radio" name="q2e" value="spinach">spinach
            </label>
            <label>
                <input type="radio" name="q2f" value="veggies">veggies
            </label>
        <p>sauce</p>
            <label>
                <input type="radio" name="q3" value="tomato">tomato
            </label>
            <label>
                <input type="radio" name="q3" value="alfredo">alfredo
            </label>
            <label>
                <input type="radio" name="q3" value="no sauce">no sauce
            </label>
        <p>name for order</p>
            <label for="first name">first name</label>
                <input type="text" id="first name" first name="first name" placeholder="enter first name here">
            <label for="last name">last name</label>
                <input type="text" id="last name" name="last name" placeholder="enter last name here.">
            <label for="phone number">phone number</label>
                <input type="text" id="phone number" name="phone number" placeholder="xxx-xxx-xxxx">
            <label for="signup for a new pizzaplace rewards member">signup for a new pizzaplace rewards member</label>
                <input type="checkbox" name="signup for a new pizzaplace rewards member" value="signup for a new pizzaplace rewards member" checked>
            <p>
            <button type="submit">place order!</button>
            </p>
    </form>
<h2>login to pizzaplace</h2>
    <form action="form.php" method="POST">
        <p>
            <label for="username">username</label>
                <input type="text" id="username" name="username" placeholder="enter username here">
            <label for="password">password</label>
                <input type="text" id="password" name="password" placeholder="enter password here.">
            <p>
            <button type="submit">login</button>
            </p>
        </p>
    </form>


<!--HOUSING SEARCH-->


<h1>find housing</h1>
<form action="form.php" method="GET">
    <p>
        <p>
            <label for="zipcode">enter your zipcode</label>
            <input type="text" id="zipcode" name="zipcode" placeholder="99999">
        </p>
        <p>
            <label for="property_type">property_type</label>
            <input type="text" id="property_type" name="property_type">
        </p>
        <p>
            <label for="min_price">Min Price</label>
            <input type="text" name="min_price" id="min_price">
        </p>
        <p>
            <label for="max_price">Max Price</label>
            <input type="text" name="max_price" id="max_price">
        </p>
        <button type="submit">find your new home</button>
        </p>
        <label for="activities">What are human activities </label>
        <select id="activities" name="activities[]" multiple>
            <option value="eat">eat</option>
            <option value="sleep">sleep</option>
            <option value="breathe">breathe</option>
        </select>
    </p>
    <p>
        <button type="submit">submit final answers</button>
    </p>    
</form>
<h2>Select Testing</h2>
    <form method="POST" action="http://requestb.in/14a5l1x1">
        <p>
            <label for="human?">are you human </label>
            <select id="human?" name="human?">
                <option value="1">yes</option>
                <option value="0" selected>no</option>   
            </select>
        </p>
        <p>
            <button type="submit">submit final answers</button>
        </p>
</body>
</html>



Add Comment Collapse

new messages