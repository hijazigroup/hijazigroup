<?php

if (isset($_POST['submit'])) {

$regnumber = $_POST['regnumber'];
$username = $_POST['username'];
$country = $_POST['country'];
$brand = $_POST['brand'];
$specs = $_POST['specs'];
$dimentions = $_POST['dimentions'];
$power = $_POST['power'];
$price = $_POST['price'];

if (file_exists($regnumber.".html")) {

exit(header('location:error.php?data='.$regnumber.' ')); 
   
}
else {


$myfile = fopen($regnumber.".html", "w") or die("can't open file");


$txt = '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hijazi Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>

body {background-color:offwhite; 
	font-family: times new roman;
}



.menu-bg {
				height: 70px;
				
				background: url("images/logo.png");
			background-repeat: no-repeat;
			background-size: 400px 90px;
			background-position: center;

  
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
  height: 300px;
  border-radius: 25px;
  border:4px dashed #a2b7ca;
}

.centerp {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
  
}

.centerprice { display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
color: red;}

hr {border: 1px dotted #a2b7ca;}

#title {color:red; font-weight: bold;}
</style>
</head>
<body>

<div class="container">
	
<div class="row">
	
<div  class="col-sm-12 col-md-12 col-lg-12 menu-bg">
	

</div>


</div>

</div>

<br>

<img src="images/'.$regnumber.'.png" alt="Paris">

<!--Headline 1 -->
	<h3 id="title" align="center" class="centerp">Code : '.$regnumber.'</h3>
<h3 align="center" class="centerp"><span id="title"> Item :</span> 

 	'.$username.' </h3>

<hr>


<!--Headline 2 -->
<h3 align="center"  class="centerp"> <span id="title"> Brand :</span>'.$brand.' 
<span id="title">/ Origin : </span> '.$country.'</h3>
<hr>

<!--Headline 3 -->
<h3 align="center"  class="centerp">
	 <span id="title">  Specs :  </span>( '.$specs.' )
 <span id="title">/ Dimentions :</span>
'.$dimentions.' </h3>
<hr>



<!--Headline 4 -->

<h3 align="center"  class="centerp"><span id="title"> Power :  </span> 
'.$power.' </h3>
<hr>
<!--Price  -->

<h3 align="center"  class="centerprice"><span id="title"> Price : </span>'.$price.'</h3>
<hr>

<a class="btn btn-success centerprice" href="https://wa.me/+9613325469?text=Qoutation For Code:'.$regnumber.'">Quotation</a>
</body>
</html>
';

fwrite($myfile, $txt);

fclose($myfile);


if (file_exists($regnumber.".html")) {

exit(header('location:insert-success.php?code='.$regnumber.'&item='.$username.'&origin='.$country.' &brand='.$brand.' &specs='.$specs.' &dimentions='.$dimentions.' &power='.$power.' &price='.$price.' ')); 
   
}


}

}

?>


<html lang="en">
<head>
  <title>php createing files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>

.title {text-shadow: 4px 4px 4px grey;
			text-align: center;}


* {
  box-sizing: border-box;

}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

label {color: red; text-transform: capitalize;font-size:15px;
				font-weight: bold; font-style: italic;
				letter-spacing: 3px;}

#submit {margin:10px;font-weight: bold; border:4px white outset;}	
#submit:hover {color:black; background-color: red; font-weight: bold;
				letter-spacing: 1px;}			
</style>
<body>

<div class="container">
	<div class="col-100">
		<h1 class="title">Add New Item : </h1>
	</div>

<form action="test.php" method="post" onsubmit="return true;">
	<div class="row">
      <div class="col-25">
        <label for="fname">Item Code :</label>
      </div>
      <div class="col-75">
        <input type="text" id="regnumber" name="regnumber" placeholder="Please Enter Item Code" required='required' >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Item Name :</label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="Please Enter Item's Name Here"  required='required'>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Origin :</label>
      </div>
      <div class="col-75">
        <input type="text" id="country" name="country" placeholder="Please Enter Origin 'country' " required='required'>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Brand :</label>
      </div>
      <div class="col-75">
        <input type="text" id="brand" name="brand" placeholder="Please Enter Brand Name " required='required'>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Specs :</label>
      </div>
      <div class="col-75">
        <input type="text" id="specs" name="specs" placeholder="Please Enter Specs Info " required='required'>
      </div>
    </div>


     <div class="row">
      <div class="col-25">
        <label for="country">Dimentions :</label>
      </div>
      <div class="col-75">
        <input type="text" id="dimentions" name="dimentions" placeholder="Please Enter Dimentions Info " required='required'>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Power :</label>
      </div>
      <div class="col-75">
        <input type="text" id="power" name="power" placeholder="Please Enter Power Info " required='required'>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Price :</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" placeholder="Please Enter Item Price " required='required'>
      </div>
    </div>


    
    <div class="row">
      <input type="submit" id="submit" value="Add Item" name="submit">
    </div>
  </form>
</div>


</body>
</html>
