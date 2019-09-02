<?php
session_start();
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<!--<link rel="stylesheet" type="text/css" href="css/styleh.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/styleh.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/styleh.css">

<style type="text/css">
  
.navbar a:hover {
  background-color: #000;
}
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/books.jpg");
  height: 40%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
.m{
  margin: 0;
  padding: 0;
}

/* Style the list items */
.n{
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;

  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
.n:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
.n:hover {
  background: #ddd;
}

 .n.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

.n.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

.myip{
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

  
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
  <h1 style="font-size:50px">MANAGE YOUR  STUDIES</h1> 
   <h3> WITH<strong> STUDYWISE</strong></h3>
    </div>
</div>



<nav style="background-color:black; " class="navbar navbar-expand-md  navbar-dark">
  <a class="navbar-brand" href="home.php"><i class="fa fa-fw fa-home"></i>HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">SUBJECTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SCORE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PERFORMANCE</a>
      </li> 
     
      <li class="nav-item">
      <a class="nav-link"  href="index.php">LOGOUT</a></li> 

    </ul>
  </div>  
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6"></div>


		<div class="col-sm-3">
	       <div id="myDIV" class="header">
  <h2>My To Do List</h2>
  <input class="myip" type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul class="m" id="myUL">
  <li class="n">Hit the gym</li>
  <li class="n" class="checked">Pay bills</li>
  <li class="n">Meet George</li> 
  <li class="n">Buy eggs</li>
  <li class="n">Read a book</li>
  <li class="n">Organize office</li>
</ul>

<script type="text/javascript">

var myNodelist = document.getElementsByClassName("n");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('m');
list.addEventListener('click', function(ev) {
  if (ev.target.className === 'n') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

</script>











		</div>








	</div>
</div>


</body>
</html>