<!DOCTYPE html>
<html lang="en">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
    
.sidebar { /* Sets up the sidebar itself such as its size and position */
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #004684;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidebar a { /* sets up sidebar text and color */
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #fdb927;
  display: block;
}

.sidebar a:hover { /* sets up the hover color on the sidebar */
  color: #f1f1f1;
}

.queryOption {
    font-size: 15pt;
    }

.main { /* Setting up location of text and text size of main area*/
  margin-left: 160px; 
  font-size: 28px; 
  padding: 0px 10px;
}
    
.submain {
  margin-left: 160px; 
  font-size: 18px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) { /*Further setting up sidebar*/
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

/* Full-width input fields */
input[type=text], input[type=password] {
  font-size: 15pt;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
    
/* Extra styles for the submit button */
.submitbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #009900;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Universities Database</title>      
  </head>
<body>
<div class="sidebar"> <!-- Sets up links and text in sidebar -->
  <img src="https://www.abdn.ac.uk/study/images/prospectus/assets/de9/43Ghfz4876ANPN4RER8smgh23TmP.jpg" height="100" width="100" style="margin-left: 30px"> <!-- Logo in top left -->
  <a href="login.html"  style="color: #f1f1f1;">Home</a>  <!-- Home button, is white to show you're on that page -->
  <a href="info.html">Information</a>
  <a href="UserRegistration.html">Register</a>
  <a href="/queries/selection.html">Data Mining</a>
  <a href="support.html">Support</a>
</div>
<div class="main">
  <h2>Universities Database: Filter Data</h2>
    </div>
    <div class="submain">
<p>Please select options to filter data.
(Leave blank if you do not wish to filter an option).</p>
<form action="datadownload.php" method="POST">
  <label for="state">State: </label>
  <input maxlength="2" size="4" type="text" id="state" name="state">
  <br><br>  
  <label for="type">Type</label>
  <br><input type="radio" id="type" name="type" value="1"> Public
  <br><input type="radio" id="type" name="type" value="2"> Private 
  <br><br>  
  In-State Tuition
  <br><input type="radio" id="instate" name="instate" value="greater10k"> Greater Than 10,000
  <br>
  <input type="radio" id="instate" name="instate" value="less10k"> Less Than 10,000
    
  <br><br>  
  Out-of-State Tuition
  <br><input type="radio" id="outstate" name="outstate" value="greater10k"> Greater Than 10,000
  <br>
  <input type="radio" id="outstate" name="outstate" value="less10k"> Less Than 10,000
    
  <br><br>  
  Graduation Rate
  <br><input type="radio" id="gradrate" name="gradrate" value="greater50"> Greater Than 50%
  <br>
  <input type="radio" id="gradrate" name="gradrate" value="less50"> Less Than 50%
    
  <br><br>
  <button class="submitbtn" type="submit" name="submit" value="View Results">View Results</button>
</form> <br>
<a href="index.html">Home Menu</a>
</div>
</body>
</html>