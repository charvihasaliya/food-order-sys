<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: black;
}
p{
  color: azure;
  font-size: x-large;
  font-weight: 600;
}
img
{
  position: relative;
    width: 100%;
    
   
}

.header {
  background-color: black;
  padding: 20px;
  text-align: center;
}

/* Container holding the image and the text */
.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: medium;
  font-weight: 500;
}



/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  font-size: medium;
  right: 16px;
  font-weight: 500;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  font-size: large;
  font-weight: 600;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}



/* Middle column */
.footer {
  margin-top: 20px;
  color: grey;
  width: 100;
  text-align:center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.centered
{
  color:azure;
  text-align: center;
  font-weight: 900;
  font-size: 60px;
}
.button
{
    background-color: black;
    border: none;
    color: #ffffff;
    font-size: 20px;
    font-weight: 600;
    width: 180px;
}


</style>
</head>
<body>

<div class="header">
  <div class="container">
    <img src="hpg2.jpg" style=" -webkit-filter: grayscale(100%); 
    filter: grayscale(100%);">
    <div class="bottom-left">12:00pm to 10:00pm</div>
    <div class="bottom-right">Walking Street</div>
    <div class="centered">Tag Restaurant</div>
  </div>
  
</div>

<div class="topnav">
  <a href="demo.html">Menu</a>

</div>

<div class="footer">
  
  
  
   
  

  
  
  <button class="button" type="button" onclick='document.getElementById("demo").innerHTML = "Tag Restaurant was started by Charvi."'>ABOUT</button>
  <p id="demo"></p>
    <img src="hpg1.jpg">
 
 
  
 
</div>
  
</body>
</html>