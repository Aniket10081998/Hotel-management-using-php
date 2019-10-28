<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch&display=swap" rel="stylesheet">
	<style>
		h1{ 
                text-align:center; 
                font-family: 'Cabin Sketch', cursive;
                letter-spacing: 4px;
            }
		html,body{
            overflow:hidden;
        }
		body 
        {
            background-image: url(https://images.unsplash.com/photo-1532408840957-031d8034aeef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1790&q=80);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        #id1{
        	position:absolute;
        	left:0;
        	right:0;
        	top:0;
        	bottom:0;
        	height:90%;
        	width:60%;
        	margin:auto;
        	box-shadow: inset 0px 0px 3000px white;
        	border-radius:1rem;
        	text-align:center;
        }
        .animation1:hover{
        		transform:scale(1.05);
        		transition: transform .2s;
        }
        input[type=text], input[type=email],select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

 input[type=password],input[type="date"]{
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
  background-color: #4CAF50;
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
	</style>

</head>
<body>
	
	<div id="id1" class="animation1">
						<div class="container">
				  
				  	<h1 style=" font-size: 55px;text-shadow: 16px 16px 32px #ffffff;">hello user !</h1>
				  	<form method="get">
				  <div class="row">
				    <div class="col-25">
				      <label for="firstname"><b>First Name</b></label>
				    </div>
				    <div class="col-75">
				      <input type="text" name="fname" placeholder="Your name..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-25">
				      <label for="lastname"><b>Last Name</b></label>
				    </div>
				    <div class="col-75">
				      <input type="text" name="lname" placeholder="Your last name..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-25">
				      <label for="country"><b>Country</b></label>
				    </div>
				    <div class="col-75">
				      <select id="country" name="country">
				        <option value="australia">Australia</option>
				        <option value="india">India</option>
				        <option value="usa">USA</option>
				      </select>
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-25">
				      <label for="emaill"><b>Email</b></label>
				    </div>
				    <div class="col-75">
				      	<input type="email"  name="email" placeholder="Your email Id..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-25">
				      <label><b>Password</b></label>
				    </div>
				    <div class="col-75">
				      	<input type="text" name="pass" placeholder="Your Password..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-25">
				      <label><b> Confirm Password</b></label>
				    </div>
				    <div class="col-75">
				      	<input type="password" name="password2" placeholder="Re-enter your Password..">
				    </div>
				  </div>
				  <div class="row">
				    <div class="col-25">
				      <label><b> DOB </b></label>
				    </div>
				    <div class="col-75">
				      	<input type="date" id="dob" name="dob" placeholder="Your Date of Birth..">
				    </div>
				  </div>	
				  <br><br>
				  <div class="row" >
				    <input type="submit" name="submit" value="SIGN UP" style="position:absolute; left:0; right:0; margin:auto;">
				  </div>
				  
				</div>
	</div>
	</form>

</body>
<?php
include 'connection.php';
$q="select email,pass from signup";
$ex=mysqli_query($conn,$q);
$a=0;

if(isset($_GET['submit']))
{
	$f=$_GET["fname"];
	$l=$_GET["lname"];
	$e=$_GET["email"];
	$p=$_GET["pass"];
	if (mysqli_num_rows($ex) > 0) 
    {
    	 while($row = mysqli_fetch_assoc($ex)) 
        
        {
            if($row["email"]==$e)
            {
                $a=$a+1;
                break;
            }
       }
}
if($a==1)
{
    $message = "User already exist";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	
	$q1="insert into signup value('$f','$l','$e','$p')";
	$m=mysqli_query($conn,$q1);
	echo"<script type='text/javascript'>document.location.href='login.php'</script>";
}
}
?>
</html>
